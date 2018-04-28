/* XML y XSL */

function makeRequest(url, loadedData, property, elementToAddResult) {
    let req = new XMLHttpRequest();
    req.open('GET', url);
    try { req.responseType = "msxml-document" } catch (ex) { console.log(ex); }
    req.onload = function() {
        loadedData[property] = req.responseXML;
        if (checkLoaded(loadedData)) {
            displayResult(loadedData.xmlInput, loadedData.xsltSheet, elementToAddResult);
        };
    };
    req.send();
}  
function checkLoaded(loadedData) {
    return loadedData.xmlInput != null && loadedData.xsltSheet != null;
}

function loadXML(xml, xsl, idElement) {
    let loadedData = { xmlInput: null, xsltSheet: null };
    let elementToAddResult = document.getElementById(idElement);
    makeRequest(xml, loadedData, 'xmlInput', elementToAddResult);
    makeRequest(xsl, loadedData, 'xsltSheet', elementToAddResult);
}  

function displayResult(xmlInput, xsltSheet, elementToAddResult) {
    if (typeof XSLTProcessor !== 'undefined') {
        let proc = new XSLTProcessor();
        proc.importStylesheet(xsltSheet);
        elementToAddResult.appendChild(proc.transformToFragment(xmlInput, document));
    }
    else if (typeof xmlInput.transformNode !== 'undefined') {
        elementToAddResult.innerHTML = xmlInput.transformNode(xsltSheet);
    }
}


/*  SOLO XML  */
function drawXMLFile(xml,id) {
    let loadedData ;
    let req = new XMLHttpRequest();
    req.open('GET', xml);

    try { req.responseType = "msxml-document" } catch (ex) { console.log(ex); }

    req.onload = function() {
        loadedData = req.responseXML;
        if(checkXML(loadedData)){
            displayXML(loadedData,id);

        }
    };
    req.send();  
}
function checkXML(xml){
    return xml != null;
}
function displayXML(xml,idElement){
    let element = document.getElementById(idElement);
    if(element == null) return;
    //console.log(xml.constructor.name);
    var coches = xml.getElementsByTagName("vehiculo");
    let json = xmlToJson(xml);

    let vehiculos = json["vehiculos"]["vehiculo"];
    for(let i = 0; i < vehiculos.length; i++){
        console.log(vehiculos[i]);
    }
    
}
function xmlToJson(xml) {	
	// Create the return object
	var obj = {};
	if (xml.nodeType == 1) { // element
		// do attributes
		if (xml.attributes.length > 0) {
		obj["@attributes"] = {};
			for (var j = 0; j < xml.attributes.length; j++) {
				var attribute = xml.attributes.item(j);
				obj["@attributes"][attribute.nodeName] = attribute.nodeValue;
			}
		}
	} else if (xml.nodeType == 3) { // text
		obj = xml.nodeValue;
	}
	//do children
	if (xml.hasChildNodes()) {
		for(var i = 0; i < xml.childNodes.length; i++) {
			var item = xml.childNodes.item(i);
			var nodeName = item.nodeName;
			if (typeof(obj[nodeName]) == "undefined") {
				obj[nodeName] = xmlToJson(item);
			} else {
				if (typeof(obj[nodeName].push) == "undefined") {
					var old = obj[nodeName];
					obj[nodeName] = [];
					obj[nodeName].push(old);
				}
				obj[nodeName].push(xmlToJson(item));
			}
		}
	}
	return obj;
};
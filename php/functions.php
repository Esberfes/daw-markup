<?php
	class Cursos {
		
		private $xml_object;
		
		function __construct($xml_path){
			
			$this->xml_object = simplexml_load_file($xml_path);
			
		}
		
		public function get_curso_by_id($id){
			
			$result = array();
			
			foreach($this->xml_object->curso as $curso){
				$id_curso = $curso->id;
				if($id_curso != $id) continue;
				
				$result['nombre'] = htmlentities((string)$curso->nombre);
				$result['categoria'] = htmlentities((string)$curso->categoria);
				$result['autor'] = htmlentities((string)$curso->autor);
				$result['subtitulo'] = htmlentities((string)$curso->subtitulo);
				$result['duracion'] = htmlentities((string)$curso->duracion);
				$result['urlfoto'] = htmlentities((string)$curso->urlfoto);
				
				$indice = array();
				foreach($curso->indice->list->element as $element){
					$indice[] = htmlentities((string)$element);
				}
				$result['indice'] = $indice;
				
				$descripcion = array();
				foreach($curso->descripcion->paragraph as $desc_paragraph){
					$descripcion[] = htmlentities((string)$desc_paragraph);
				}
				$result['descripcion'] = $descripcion;
			}
			
			return $result;
		}
		
		public function get_cursos(){
			
			$result = array();
			
			foreach($this->xml_object->curso as $curso){
				
				$curso_array = array();
				
				$curso_array['id'] = htmlentities((string)$curso->id);
				$curso_array['nombre'] = htmlentities((string)$curso->nombre);
				$curso_array['categoria'] = htmlentities((string)$curso->categoria);
				$curso_array['autor'] = htmlentities((string)$curso->autor);
				$curso_array['subtitulo'] = htmlentities((string)$curso->subtitulo);
				$curso_array['duracion'] = htmlentities((string)$curso->duracion);
				$curso_array['urlfoto'] = htmlentities((string)$curso->urlfoto);
				
				$indice = array();
				foreach($curso->indice->list->element as $element){
					$indice[] = htmlentities((string)$element);
				}
				$curso_array['indice'] = $indice;
				
				$descripcion = array();
				foreach($curso->descripcion->paragraph as $desc_paragraph){
					$descripcion[] = htmlentities((string)$desc_paragraph);
				}
				$curso_array['descripcion'] = $descripcion;
				
				$result[] = $curso_array;
			}
			
			return $result;
		}
		
		public function get_next_id(){
			$last_id = 0;
			
			foreach($this->xml_object->curso as $curso){
				$id = htmlentities((int)$curso->id);
				if($id > $last_id) $last_id = $id;
			}
			return $last_id + 1;
		}
		
		public function add_curso($nombre,$categoria,$autor,$subtitulo,$indice_in,$descripcion_in, $duracion, $url_foto){
			
			$curso = $this->xml_object->addChild('curso');
			$curso->addChild('id' , $this->get_next_id());
			$curso->addChild('nombre' , $nombre);
			$curso->addChild('categoria' , $categoria);
			$curso->addChild('autor' , $autor);
			$curso->addChild('subtitulo' , $subtitulo);
			
			//Indice separado ::
			$indice = $curso->addChild('indice');
			$list = $indice->addChild('list');
			
			foreach(explode('::',$indice_in) as $element){
				$list->addChild('element' , $element);
			}
			
			//Descripcion separador ::
			$descripcion = $curso->addChild('descripcion');
			
			foreach(explode('::',$descripcion_in) as $paragraph){
				$descripcion->addChild('paragraph' , $paragraph);
			}
			
			$curso->addChild('duracion' , $duracion);
			$curso->addChild('urlfoto' , $url_foto);
			
			//Guardar nuevos datos
			$this->xml_object->asXml('xml/test.xml');

		}
	}
?>
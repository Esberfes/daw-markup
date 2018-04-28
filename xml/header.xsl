<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
<xsl:output method="html"/>	
    <xsl:template match="/">	
		<header class="wow fadeInRight">
			<div class="float-right mt-5 pr-5">
				<h5><xsl:value-of select="header/subtitle"/></h5>
				<h2><xsl:value-of select="header/title"/></h2>
				<hr align="left" class="border-white hr-small"/>
			</div>
		</header>
    </xsl:template>
</xsl:stylesheet>

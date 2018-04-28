<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
<xsl:output method="html"/>	
    <xsl:template match="/">	
		<footer class="p-5">
			<div class="container">
				<xsl:for-each select="footer/paragraph">
					<p class="text-center"><xsl:value-of select="."/></p>
				</xsl:for-each>
				
				<div class="text-center">
					<img width="250px" alt="logo">
						<xsl:attribute name="src">
							<xsl:value-of select="footer/logo"/>
						</xsl:attribute>
           			</img>
				</div>
				
			</div>
		</footer>
    </xsl:template>
</xsl:stylesheet>

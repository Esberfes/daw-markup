<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
<xsl:output method="html"/>	
    <xsl:template match="/">
		<nav class="nav light-black-bg wow fadeInLeft">
			<div class="logo">
				<img alt="esb-academy">
					<xsl:attribute name="src">
						<xsl:value-of select="navigation/logo"/>
					</xsl:attribute>
           		</img>
			</div>
			<ul>
				<xsl:for-each select="navigation/menu">
					<xsl:if test="url">
					  <li>
							<a>
								<xsl:attribute name="href">
									<xsl:value-of select="url"/>
								</xsl:attribute>
								<xsl:value-of select="title"/>
							</a>
						</li>
					</xsl:if>
					
					<xsl:for-each select="dropdown">
						<li class="dropdown">
							<span><xsl:value-of select="title"/></span>
							<div class="dropdown-content light-black-bg">
								<xsl:for-each select="submenu/menu">
									<a>
										<xsl:attribute name="href">
											<xsl:value-of select="url"/>
										</xsl:attribute>
										<xsl:value-of select="title"/>
									</a>
								</xsl:for-each>	
							</div>
						</li>
					</xsl:for-each>
				</xsl:for-each>	
			</ul>
		</nav>
    </xsl:template>
</xsl:stylesheet>

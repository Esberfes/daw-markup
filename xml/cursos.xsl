<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
<xsl:output method="html"/>	
    <xsl:template match="/">
		<div class="row">
			
			<xsl:for-each select="cursos/curso">
				<div class="col-12 col-lg-3 mb-5 mt-5">
					<div style="height:100%" class="e-card curso-cnt wow zoomInDown">
						<div class="curso">
							<img width="100%">
								<xsl:attribute name="src">
									<xsl:value-of select="urlfoto"/>
								</xsl:attribute>
							</img>
							<div class="title text-left">
								<xsl:value-of select="nombre"/>
							</div>
							<!-- MODAL -->
							<div class="modal">
								<div class="modal-content">

									<div class="row">
										<div class="col-12"><span class="close">X</span></div>
										<div class="col-12 col-lg-3">
											<img width="100%">
												<xsl:attribute name="src">
													<xsl:value-of select="urlfoto"/>
												</xsl:attribute>
											</img>
										</div>
										<div class="col-12 col-lg-9">
											<h3><xsl:value-of select="nombre"/></h3>
											<h5><xsl:value-of select="subtitulo"/></h5>
											<div class="mt-3">
												<span class="mr-3" ><b style="margin-right: 10px;">Categoría:</b><xsl:value-of select="categoria"/></span>
												<span class="mr-3"><b style="margin-right: 10px;">Duración:</b><xsl:value-of select="duracion"/>h</span>
												<span class="mr-3"><b style="margin-right: 10px;">Autor:</b><xsl:value-of select="autor"/></span>
												<span class="mr-3"><b style="margin-right: 10px;">Id:</b><xsl:value-of select="id"/></span>
											</div>
										</div>	
										<div class="col-12 col-lg-6 mt-3">
											<xsl:for-each select="indice/list/element">
												<ul>
													<li><xsl:value-of select="."/></li>
												</ul>
											</xsl:for-each>
										</div>
										<div class="col-12 col-lg-6 mt-3 border-left text-justify">
											<xsl:for-each select="descripcion/paragraph">
												<p>
													<xsl:value-of select="."/>
												</p>
											</xsl:for-each>
										</div>
									</div>
								</div>
							</div>
							<!--END MODAL -->
						</div>
						
						<div class="content">
							<p><xsl:value-of select="subtitulo"/></p>
							<!--
							<p><b style="margin-right: 10px;">Categoría:</b><xsl:value-of select="categoria"/></p>	
							<p><b style="margin-right: 10px;">Duración:</b><xsl:value-of select="duracion"/>h</p>
							-->
						</div>
						<div class="btn-container">
							<!-- INSCRIPCION -->
							<div class="inscripcion-btn">
								<div class="e-btn e-btn-insc">Inscribirme</div>
								<!-- MODAL FORM -->
								<div class="modal-form">
									<div class="modal-content-form">
										<div class="row">
											<div class="col-6"><img src="images/logos/logo-esbacademy.svg" alt=""/></div>
											<div class="col-6"><span class="close">X</span></div>
											<div class="col-12">
												<h3><xsl:value-of select="nombre"/></h3>
												<p>Mandanos tus datos y te enviaremos la información del curso</p>
											</div>
											<div class="col-12">
												<form action="">
													<label for="">Nombre</label>
													<input placeholder="Tu nombre" type="text"/>
													<label for="">Email</label>
													<input placeholder="Tu email" type="email"/>
													<div class="e-btn">Solicitar</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<!-- END MODAL FORM -->
							</div>
						<!-- END INSCRIPCION -->
						</div>
					</div>
				</div>
				
			</xsl:for-each>
		</div>

		
    </xsl:template>
</xsl:stylesheet>

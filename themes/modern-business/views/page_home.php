<ion:partial view="header" />

<!-- Header Carousel -->
    <center>
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill">
                <ion:medias type="picture" size="1000" limit="1">
                <center>
                <img src="<ion:media:base_path />slider/gbanner6.jpg" alt="<ion:media:alt />" />
                </center>
                </ion:medias>
                </div>
                <div class="carousel-caption">
                    <?php
				/*
				 * Page's title
				 *
				 * Displayed with the tag "h1"
				 * If no title is set, no empty tag will be rendered
				 *
				 */
				?>
                <?php
				/*
				 * Page's subtitle
				 *
				 * We use the native PHP method "nl2br" to render the newlines
                 * in the subtitle
				 *
				 */
				?>
                </div>
            </div>
            <div class="item">
                <div class="fill">
                <ion:medias type="picture" limit="1">
                <center>
                <img src="<ion:media:base_path />slider/gbanner8.jpg"  alt="<ion:media:alt />" />
                </center>
                </ion:medias>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    </center>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Section -->
        <div class="row">
        <hr />
            <div class="col-lg-12">
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <ion:medias type="picture" limit="1">
                    <center>
                    <img class="img-responsive img-portfolio img-hover" src="<ion:media:base_path />pict/latest8.jpg"  alt="<ion:media:alt />" />
                    </center>
                    </ion:medias>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <ion:medias type="picture" limit="1">
                    <center>
                    <img class="img-responsive img-portfolio img-hover" src="<ion:media:base_path />pict/latest2.jpg"  alt="<ion:media:alt />" />
                    </center>
                    </ion:medias>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <ion:medias type="picture" limit="1">
                    <center>
                    <img class="img-responsive img-portfolio img-hover" src="<ion:media:base_path />pict/latest3.jpg"  alt="<ion:media:alt />" />
                    </center>
                    </ion:medias>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <!-- Marketing Icons Section -->
        <div class="row">
            
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="glyphicon glyphicon-heart"></span>&nbsp;Donasi</h4>
                    </div>
                    <div class="panel-body">
                        <table>
                        <tr>
                        <td width="120"><strong>Bank BRI</strong></td>
                        <td>:</td>
                        <td>123123123123</td>
                        </tr>
                        <tr>
                        <td><strong>Bank BNI</strong></td>
                        <td>:</td>
                        <td>123123123123</td>
                        </tr>
                        <tr>
                        <td><strong>Bank Mandiri</strong></td>
                        <td>:</td>
                        <td>123123123123</td>
                        </tr>
                        <tr>
                        <td><strong>Mandiri Syariah</strong></td>
                        <td>:</td>
                        <td>123123123123</td>
                        </tr>
                        <tr>
                        <td><strong>Bank BJB</strong></td>
                        <td>:</td>
                        <td>123123123123</td>
                        </tr>
                        </table>
                        <hr />
                        <a href="#" class="btn btn-danger">Lihat panduan donasi >></a>
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="glyphicon glyphicon-earphone"></span> Konsultasi</h4>
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-phone-alt"></span> Telp : 022-2001234</div>
                        <div class="alert alert-info" role="alert"><span class="glyphicon glyphicon-envelope"></span> Email : 022-2001234</div>
                        <div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-comment"></span> SMS : 08572221234</div>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="glyphicon glyphicon-globe"></span> Social Media</h4>
                    </div>
                    <div class="panel-body">
                        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FUlul-Azmi-Foundation%2F186029634776673&amp;width=230&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=200" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:230px; height:200px;" allowtransparency="true"></iframe>
                        
                        <iframe width="230" height="215" src="//www.youtube.com/embed/w3uFb9Lgr_o" frameborder="0" allowfullscreen></iframe>
                        
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="glyphicon glyphicon-stats"></span> Statistik Kunjungan</h4>
                    </div>
                    <div class="panel-body">
                        <table width="100%" cellspacing="2">
	<tbody><tr><td width="40%">
	<img src="../images/9.gif">&nbsp; Visitors </td><td>: <b>15539</b>	 visitors</td></tr><tr><td>
	<img src="../images/9.gif">&nbsp; Hits </td><td>: <b>20271</b> hits</td></tr><tr><td>
	<img src="../images/10.gif">&nbsp; Today </td><td>: <b><b>34</b></b> users</td></tr><tr><td>
	<img src="../images/10.gif">&nbsp; Online </td><td>: <b><b>1</b></b> users</td></tr></tbody></table><br /><legend></legend><center>Sejak 20 April 2011</center>
                    </div>
                </div>
            </div>
            
            
            <div class="col-md-6">
                <div id="mySkinnedTabWrapper">

		 <ul class="nav nav-tabs">
			<li class="active"><a href="#tab5" data-toggle="tab">Artikel</a></li>
			<li class=""><a href="#tab6" data-toggle="tab">Berita</a></li>
			<li class=""><a href="#tab7" data-toggle="tab">Kegiatan</a></li>
		 </ul>

		 <div class="tab-content">

			<div id="tab5" class="tab-pane active">
            <ion:page:articles pagination="5">
            <div class="list-group" style="margin-bottom: 0px;">
                <a title="<ion:article:title />" href="<ion:article:url />" class="list-group-item">
                        <ion:medias type="picture,video" limit="1">
			                 <ion:media:type is="picture">
			                     <img class="media-object" src="<ion:media:src size='300,200' method='adaptive' />" />
			                 </ion:media:type>
                        </ion:medias>
                        <h4 class="list-group-item-heading"><ion:article:title /></h4>
                        <p class="list-group-item-text">
                        <ion:article:content paragraph="1" /> 
                        </p>
                </a>
            </div>
            </ion:page:articles>
            <ion:page:articles:pagination pagination="5" />
			</div>

			<div id="tab6" class="tab-pane">
                <ion:page id="blog">
					<ion:articles>
						<ion:article>
                        
                        <?php
									/*
									 * Static Item : Flag
									 * If one Static item called "flag" is linked to the article,
									 * the content of the field called "text" will be displayed.
									 *
									 * As we limit to 1, only the first flag will be used.
									 *
									 */
									?>
									<ion:article:static:flag:items limit="1">
										<div class="flag"><span><ion:text:value /></span></div>
									</ion:article:static:flag:items>

									<a href="<ion:url />"><h3><ion:title /></h3></a>
                                    <div class="hide-for-small medium-4 large-4 columns">

										<ion:medias type="picture,video" limit="1">

											<ion:media:type is="video">
												<div class="media">
													<ion:media:provider  is='youtube'><iframe class="video" width="100%" height="200" src="<ion:media:src />" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></ion:media:provider>
													<ion:media:provider  is='vimeo'><iframe class="video" width="100%" height="200" src="<ion:media:src />" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></ion:media:provider>
													<ion:media:provider  is='dailymotion'><iframe class="video" width="100%" height="200" src="<ion:media:src />" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></ion:media:provider>
													<ion:media:extension is="mp4"><video class="video" width="100%" height="200"controls><source src="<ion:media:src />" type="video/mp4" ></video></ion:media:extension>
													<ion:media:extension is="ogv"><video class="video" width="100%" height="200" controls><source src="<ion:media:src />" type="video/ogg" ></video></ion:media:extension>
												</div>
											</ion:media:type>

											<ion:media:type is="picture">
												<img src="<ion:media:src size='300,200' method='adaptive' />" />
											</ion:media:type>

										</ion:medias>


									</div>

									<div class="medium-8 large-8 columns">
										<?php
										/*
										 * Content, limited to the first paragraph
										 */
										?>
										<ion:content paragraph="1" />

									</div>

						</ion:article>
					</ion:articles>
				</ion:page>
			</div>

			<div id="tab7" class="tab-pane">
				 <p>This is another tab.</p>
			</div>
		      </div>
		      </div>
            </div>
            
            
        </div>
        <!-- /.row -->
        
        <div class="row">
            
        </div>
        

        

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Sejarah singkat</h2>
            </div>
            <div class="col-md-6">
                <p>Berawal dari gagasan seseorang yang khusyu dalam mengamati keprihatinan anak yatim, beliau adalah H.Ade Sanjaya Aliyasa berkeinginan kuat untuk membuat sebuah panti asuhan yang dihuni oleh yatim-piatu, yatim dan dh'afa. Menurut beliau cita cita itu lahir sejak tahun 2002 dengan langkah awalnya mengumpulkan semeter dua meter tanah hingga 1.500 m2 dan tahun 2009 dibangun sebuah bangunan asrama putra dan putri yang menampung sebanyak 40 orang yatim..</p>
                <p>Alhamdulillah, dengan pertolongan Allah SWT, di bulan Ramadhan 1431H beliau dipertemukan dengan seorang yang punya keinginan sama yaitu Bapak Obay Sobarna. Disanalah terjadi dialog yang panjang dalam rangka menyamakan motivasi, konsep dan program tentang Panti Asuhan Yatim yang akan didirikan. Pada saat itu terjadilah sebuah komitmen bersama untuk melaksanakan amanah besar yaitu memelihara anak yatim. sebagaima yang diperintahkan Nabi Muhammad SAW</p>
                <p>
                Pada bulan Oktober 2010 dibentuklah Yayasan Panti Asuhan Ulul Azmi sebagai lembaga penghimpun anak yatim. Yayasan ini sedang dalam perjalanan konsolidasi, proses legalisasi, dan perencanaan pembangunan sarana pendukung. Namun kami tetap berjalan dengan membuka penerimaan anak yatim dan dhuafa, walaupun masih terbatas baik sarana dan prasarana. Sampai saat ini sudah terkumpul 40 yatim dan dhu'afa yang diasramakan dan 200 yatim dan dhuafa non asrama. Itulah sekilas profil Yayasan Panti Asuhan Ulul Azmi
                </p>
            </div>
            <div class="col-md-6">
                <ion:medias type="picture" limit="1">
                    <center>
                    <img class="img-responsive" src="<ion:media:base_path />pict/gb176.jpg"  alt="<ion:media:alt />" />
                    </center>
                    </ion:medias>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-danger btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

<ion:partial view="footer" />

        
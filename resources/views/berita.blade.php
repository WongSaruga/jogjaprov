
<!DOCTYPE html>
<html lang="id">

<!-- Mirrored from jogjaprov.go.id/berita by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2019 03:39:31 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta http-equiv="content-type" content="application/json; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="shortcut icon" href="static/images/client-logo.png">
	<meta name="description" content="">
	<meta name="Keywords" content="jogja,budaya">
	<meta itemprop="image" content="static/images/client-logo.png">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">    
    <meta name="twitter:title" content="List Berita | Portal Pemda DIY">
    <meta name="twitter:description" content="">    
    <meta name="twitter:image:src" content="static/images/client-logo.png">
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="650" />
	<meta property="og:image:height" content="366" />
    <!-- Open Graph meta information -->
    <meta property="og:title" content="List Berita | Portal Pemda DIY">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="static/images/client-logo.png">
    <meta property="og:description" content="">
    <link rel="manifest" href="manifest.json" />
	<script src="{{URL::asset('portal/cdn.onesignal.com/sdks/OneSignalSDK.js')}}" async='async'></script>
<link href="{{URL::asset('portal/vjs.zencdn.net/7.2.3/video-js.css')}}" rel="stylesheet">
    <meta name="csrf-param" content="frontend-csrf">
    <meta name="csrf-token" content="TEtuQ0dYZU4bKT40PWAoFn8lWRsLazQXOXMdcn4rMy8vFAMgdTUQfQ==">
    <title>List Berita | Portal Pemda DIY</title>
    <link rel="manifest" href="static/js/portal/manifest.json">

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107210355-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments)};
	  gtag('js', new Date());

	  gtag('config', 'UA-107210355-1');
	</script>
    <link href="{{URL::asset('static/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/plugins/lineicon/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/plugins/slick/slick.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/plugins/slick/slick-theme.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/plugins/fancybox/jquery.fancybox.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('static/css/portal/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('static/css/portal/style.css')}}" rel="stylesheet">
        <link href="{{URL::asset('static/plugins/sweet-alert/sweet-alert.css')}}" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="{{URL::asset('static/js/portal/jquery-migrate-1.2.1.min.js')}}" async="async"></script>
        <script src="{{URL::asset('static/js/portal/bootstrap.min.js')}}" async="async"></script>
        <script src="{{URL::asset('static/js/portal/script.js')}}" async="async"></script>
        <script src="{{URL::asset('static/plugins/slick/slick.min.js')}}" async="async"></script>
        <script src="{{URL::asset('static/plugins/sweet-alert/sweet-alert.min.js')}}" async="async"></script>
        <script src="{{URL::asset('static/plugins/fancybox/jquery.fancybox.min.js')}}" async="async"></script>
</head>
<body>
        	<style>
    		.fancybox-infobar{ display: none; }
    		.fancybox-button--zoom{ display: none!important; }
			.fancybox-caption:after {border-bottom: 0px }
			.fancybox-navigation .disabled {display:none;}
    	</style>
		<script>
			var OneSignal = window.OneSignal || [];
			OneSignal.push(["init", {
			  appId: "8cc96c30-7a1e-4875-ab11-a29dce8cf78c",
			  autoRegister: true, /* Set to true to automatically prompt visitors */
			  httpPermissionRequest: {
				enable: false
			  },
			  notifyButton: {
				  enable: false /* Set to false to hide */
			  },
			   promptOptions: {
					actionMessage 	: "Aktifkan notifikasi untuk menerima pemberitahuan.",
					/* acceptButtonText limited to 15 characters */
					acceptButtonText: "TERIMA",
					/* cancelButtonText limited to 15 characters */
					cancelButtonText: "TIDAK"
				},
				welcomeNotification : {
					disable: true
				}
			}]);
			
			OneSignal.push(function() {
				OneSignal.registerForPushNotifications({
					httpPermissionRequest: true,
					modalPrompt: false
				});
			OneSignal.on('subscriptionChange', function (isSubscribed) {
					  OneSignal.getUserId(function(userId) {
						  console.log(userId);
						  user(userId);
					  });
					});
		  
				OneSignal.on('notificationDisplay', function (event) {
					var audio = new Audio('static/onesignal_default_sound.html');
					audio.play();
				});
			});
			
			function user(userId){
				console.log("OneSignal User ID:", userId);
				var url = 'site/subscribe/index.html';
				$.ajax({
						url 	: url + userId,
						type 	: "post",
						async 	: true,
						dataType: "json",
						success	: function(data) {
							
						},
						error 	: function (textStatus, errorThrown) {
							
						}
					});
				
			}
		</script>
		
		<form id="w1" action="https://jogjaprov.go.id/search/filter" method="post">
<input type="hidden" name="frontend-csrf" value="TEtuQ0dYZU4bKT40PWAoFn8lWRsLazQXOXMdcn4rMy8vFAMgdTUQfQ==">			<div id="searchform" class="collapse">
			<div class="container">
				<input type="text" class="form-control" name="keywords" value="" size="50" placeholder="Cari Informasi Seputar DIY di sini!.." required="">			</div>
			</div>
		</form>		
		<nav class="topnav">
			<div class="container">
				<div class="pull-left">
					<ul>
													<li><a href="http://www.facebook.com/humaspemdadiy" target="_blank"><i class="fa fa-facebook"></i></a></li>
																			<li><a href="http://www.twitter.com/humas_jogja" target="_blank"><i class="fa fa-twitter"></i></a></li>
																			<li><a href="https://www.youtube.com/channel/UC6vcKVVzPxWw3eVxfa-gkJQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
																			<li><a href="http://www.instagram.com/humasjogja" target="_blank"><i class="fa fa-instagram"></i></a></li>
																			<li><a href="http://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
																			<li><a href="https://plus.google.com/u/0/106286731015404899251" target="_blank"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="rss" target="_blank"><i class="fa fa-rss"></i></a></li>
					</ul>
				</div>
				<div class="pull-right">
				</div>
				<div class="clearfix"></div>
			</div>
		</nav>
		<nav class="navbar navbar-default header">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><img src="static/images/logo.png" alt=""></a>
				</div>
		
				<div class="collapse navbar-collapse navigation">
					
<ul class="nav navbar-nav navbar-right"><li><a href="home.html">Beranda</a></li>
<li><a href="#">Layanan <i class="caret"></i></a>
<ul>
<li><a href="#">BISNIS<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="http://ptsp.jogjaprov.go.id/" target="_blank">Perizinan </a></li>
<li><a href="http://jogjainvest.jogjaprov.go.id/" target="_blank">Jogja Invest </a></li>
<li><a href="http://www.plutjogja.com/" target="_blank">Pendampingan UMKM </a></li>
</ul>
</li>
<li><a href="#">BUDAYA<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="http://disbud.jogjaprov.go.id/" target="_blank">Jogja Budaya </a></li>
<li><a href="http://www.sonobudoyo.com/" target="_blank">Museum Sonobudoyo </a></li>
<li><a href="http://tamanbudayayogyakarta.com/" target="_blank">Taman Budaya </a></li>
<li><a href="http://mam.jogjaprov.go.id/cctv" target="_blank">CCTV Tempat Wisata </a></li>
</ul>
</li>
<li><a href="#">E-GOV<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="http://mail.jogjaprov.go.id/" target="_blank">Email Pemda DIY </a></li>
<li><a href="http://sengguh.jogjaprov.go.id/" target="_blank">Sengguh </a></li>
<li><a href="http://jogjaplan.jogjaprov.go.id/" target="_blank">Jogjaplan </a></li>
<li><a href="https://elhkpn.kpk.go.id/portal/user/pengumuman_lhkpn/ZFVsaFJTOTVjSGhaZVdrMFlqZHVRMGxpTWtFMGVtMVBXbUZSTkU1cWFtRXpWSGd6VEZwb2I" target="_blank">e-LHKPN </a></li>
<li><a href="http://ppid.jogjaprov.go.id/" target="_blank">PPID D.I. Yogyakarta </a></li>
</ul>
</li>
<li><a href="#">JOGJA APPS<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="https://play.google.com/store/apps/details?id=id.go.jogjaprov.jogjaistimewa&amp;hl=in" target="_blank">Jogja Istimewa </a></li>
<li><a href="https://play.google.com/store/apps/details?id=io.jmc.elapordiy&amp;hl=in" target="_blank">E-Lapor DIY </a></li>
<li><a href="https://play.google.com/store/apps/details?id=mam.reader.ijogja&amp;hl=in" target="_blank">iJogja </a></li>
<li><a href="https://play.google.com/store/apps/details?id=org.btkp_diy.aksara_jawa&amp;hl=in" target="_blank">Hanacaraka </a></li>
<li><a href="https://play.google.com/store/apps/details?id=org.btkpdiy.lumbungbudayajogja&amp;hl=in" target="_blank">Lumbung Budaya Jogja </a></li>
<li><a href="https://play.google.com/store/apps/details?id=sutadi.da.bbi&amp;hl=in" target="_blank">Belajar Bahasa Indonesia </a></li>
</ul>
</li>
<li><a href="#">JOGJAWARA<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="profil/4-visi-misi-tujuan-dan-sasaran.html" target="_blank">Profil </a></li>
<li><a href="http://birohukum.jogjaprov.go.id/" target="_blank">Produk Hukum </a></li>
<li><a href="http://jogjaplan.jogjaprov.go.id/" target="_blank">Perencanaan Pembangunan </a></li>
<li><a href="http://sengguh.jogjaprov.go.id/" target="_blank">Transparansi Anggaran </a></li>
<li><a href="http://bappeda.jogjaprov.go.id/dataku/" target="_blank">Jogja Data </a></li>
</ul>
</li>
<li><a href="#">KESEHATAN<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="http://103.255.15.70:8087/spgdt/" target="_blank">Fasilitas Kesehatan </a></li>
<li><a href="http://www.duniaremaja.jogjaprov.go.id/" target="_blank">Konsultasi Remaja </a></li>
<li><a href="http://dinkes.jogjaprov.go.id/dinkes/home" target="_blank">Jogja Sehat </a></li>
<li><a href="http://grhasia.jogjaprov.go.id/" target="_blank">RS Jiwa Grhasia </a></li>
<li><a href="http://rsprespira.jogjaprov.go.id/" target="_blank">RS Paru Respira </a></li>
<li><a href="http://jamkesos.jogjaprov.go.id/" target="_blank">Jaminan Kesehatan Sosial </a></li>
<li><a href="http://labkes.jogjaprov.go.id/" target="_blank">Laboratorium Kesehatan </a></li>
<li><a href="http://bapelkes.jogjaprov.go.id/" target="_blank">Pelatihan Kesehatan </a></li>
</ul>
</li>
<li><a href="#">PARIWISATA<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="agenda.html" target="_blank">Agenda </a></li>
<li><a href="http://visitingjogja.jogjaprov.go.id/" target="_blank">Wisata Jogja </a></li>
</ul>
</li>
<li><a href="#">PENDIDIKAN<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="http://ijinpenelitian.jogjaprov.go.id/izin/public/pzn" target="_blank">Izin Penelitian </a></li>
<li><a href="http://jogjabelajar.jogjaprov.go.id/" target="_blank">Jogja Belajar </a></li>
<li><a href="http://dikpora.jogjaprov.go.id/" target="_blank">Data Pendidikan </a></li>
<li><a href="http://ppdb.jogjaprov.go.id/" target="_blank">PPDB Online </a></li>
</ul>
</li>
<li><a href="#">TANGGAP DARURAT<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="http://portal.jogjaprov.go.id/layanan/9-penanggulangan-bencana" target="_blank">Nomor Telepon Penting </a></li>
<li><a href="http://bpbd.jogjaprov.go.id/home" target="_blank">Pusdalops </a></li>
</ul>
</li>
<li><a href="#">TRANSPORTASI<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="http://dishub.jogjaprov.go.id/trans-jogja" target="_blank">Trans Jogja </a></li>
<li><a href="http://mam.jogjaprov.go.id/atcs" target="_blank">ATCS </a></li>
</ul>
</li>
<li><a href="#">WARGA<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="http://kependudukan.jogjaprov.go.id/" target="_blank">Info Kependudukan </a></li>
<li><a href="http://infonjkbdiy.com/" target="_blank">Info Pajak Kendaraan Bermotor </a></li>
<li><a href="http://infokerja.kemnaker.go.id/" target="_blank">Lowongan Kerja </a></li>
<li><a href="http://tpid-diy.org/" target="_blank">Harga Bahan Pokok </a></li>
<li><a href="pengumuman.html" target="_blank">CPNS 2018 </a></li>
</ul>
</li>
</ul>
</li>
<li><a href="#">Artikel <i class="caret"></i></a>
<ul>
<li><a href="artikel/index/19-budaya-dan-pariwisata.html">Budaya dan Pariwisata</a></li>
<li><a href="artikel/index/15-ekonomi-dan-bisnis.html">Ekonomi dan Bisnis</a></li>
<li><a href="artikel/index/18-hukum.html">Hukum</a></li>
<li><a href="artikel/index/7-pekerjaan.html">Kepegawaian dan Ketenagakerjaan</a></li>
<li><a href="artikel/index/11-kesehatan.html">Kesehatan</a></li>
<li><a href="artikel/index/24-komunikasi-dan-informatika.html">Komunikasi dan Informatika</a></li>
<li><a href="artikel/index/6-pendidikan.html">Pendidikan</a></li>
<li><a href="artikel/index/22-perhubungan.html">Perhubungan</a></li>
<li><a href="artikel/index/12-perizinan.html">Perizinan</a></li>
<li><a href="artikel/index/21-pertanian-dan-perkebunan.html">Pertanian dan Perkebunan</a></li>
<li><a href="artikel/index/1-tanggap-darurat.html">Tanggap Darurat</a></li>
</ul>
</li>
<li><a href="berita.html">Berita</a></li>
<li><a href="#">Agenda <i class="caret"></i></a>
<ul>
<li><a href="agenda.html">Agenda</a></li>
<li><a href="pengumuman.html">Pengumuman</a></li>
</ul>
</li>
<li><a href="#">Profil<i class="caret"></i></a>
<ul>
<li><a href="profil/6-instansi.html">Instansi</a></li>
<li><a href="profil/5-profil.html">Lambang Daerah</a></li>
<li><a href="profil/7-satriya-sebagai-budaya-pemerintahan-di-diy.html">SATRIYA</a></li>
<li><a href="profil/3-sejarah.html">Sejarah</a></li>
<li><a href="profil/4-visi-misi-tujuan-dan-sasaran.html">Visi & Misi</a></li>
</ul>
</li>
<li><a href="#">Media <i class="caret"></i></a>
<ul>
<li><a href="media.html">Galeri</a></li>
<li><a href="download.html">Download</a></li>
</ul>
</li>
<li><a href="#">Link <i class="caret"></i></a>
<ul>
<li><a href="subdomain.html">Subdomain</a></li>
<li><a href="external_links.html">External Links</a></li>
</ul>
</li>
<li><a href="kontak.html">Kontak Kami</a></li>
<li><a href="#" class="hidden-xs" data-toggle="collapse" data-target="#searchform"><i class="fa fa-search"></i></a></li></ul>				</div>
			</div>
		</nav>
	
		<div class="pathway">
			<div class="container">
				<ul class="breadcrumb"><li><a href="home/index.html">Beranda</a></li>
<li><a href="berita/index.html">Berita</a></li>
</ul>			</div>
		</div>
					
		<div class="section section-xl">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 blog-sidebar">
                
<form id="w0" action="https://jogjaprov.go.id/berita/filter" method="post">
<input type="hidden" name="frontend-csrf" value="TEtuQ0dYZU4bKT40PWAoFn8lWRsLazQXOXMdcn4rMy8vFAMgdTUQfQ==">    <div class="searchform">
        <div class="input-group">
            <input type="text" id="beritasearch-keyword" class="form-control" name="BeritaSearch[keyword]" value="" size="50" placeholder="Cari berita..">            <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </div>
<br/><br/>

<h4>KATEGORI</h4>
<ul class="kategori">
                <li >
                <a href=berita/index1f33.html?kategori=25-ekonomi >
                    Ekonomi                </a>
            </li>
                    <li >
                <a href=berita/index7ce0.html?kategori=21-gubernur-diy >
                    Gubernur DIY                </a>
            </li>
                    <li >
                <a href=berita/index5af3.html?kategori=24-infrastruktur >
                    Infrastruktur                </a>
            </li>
                    <li >
                <a href=berita/index4ecf.html?kategori=26-kebudayaan >
                    Kebudayaan                </a>
            </li>
                    <li >
                <a href=berita/index9f8c.html?kategori=kemasyarakatan >
                    Kemasyarakatan                </a>
            </li>
                    <li >
                <a href=berita/indexb24f.html?kategori=kesehatan >
                    Kesehatan                </a>
            </li>
                    <li >
                <a href=berita/index8c36.html?kategori=dgs-unggulan >
                    Layanan                </a>
            </li>
                    <li >
                <a href=berita/index5cb2.html?kategori=wisata >
                    Pariwisata                </a>
            </li>
                    <li >
                <a href=berita/index94d4.html?kategori=23-pemda-diy >
                    Pemda DIY                </a>
            </li>
                    <li >
                <a href=berita/index9072.html?kategori=pendidikan >
                    Pendidikan                </a>
            </li>
                    <li >
                <a href=berita/index7a93.html?kategori=produk-hukum >
                    Produk Hukum                </a>
            </li>
                    <li >
                <a href=berita/index4467.html?kategori=situs-tautan >
                    Situs Tautan                </a>
            </li>
                    <li >
                <a href=berita/indexd3f3.html?kategori=tanggap-darurat >
                    Tanggap Darurat                </a>
            </li>
                    <li >
                <a href=berita/indexaf00.html?kategori=video-jogja >
                    Video Jogja                </a>
            </li>
                    <li >
                <a href=berita/index7fbf.html?kategori=22-wakil-gubernur-diy >
                    Wakil Gubernur DIY                </a>
            </li>
                <!-- <input id="beritasearch-id_berita_kategori" class="form-control" name="BeritaSearch[id_berita_kategori]" 
            type="hidden" value=""> -->
    </ul>
<br/>
<h4>Arsip Berita</h4>
<ul class="arsip">
                        <li >
                <a href=berita/index600e.html?bulan_arsip=2019-07 >
                    Juli 2019                </a>
            </li>
                    <li >
                <a href=berita/index9157.html?bulan_arsip=2019-06 >
                    Juni 2019                </a>
            </li>
                    <li >
                <a href=berita/indexbc5e.html?bulan_arsip=2019-05 >
                    Mei 2019                </a>
            </li>
                    <li >
                <a href=berita/index2e4b.html?bulan_arsip=2019-04 >
                    April 2019                </a>
            </li>
                    <li >
                <a href=berita/indexb54e.html?bulan_arsip=2019-03 >
                    Maret 2019                </a>
            </li>
                    <li >
                <a href=berita/indexcde7.html?bulan_arsip=2019-02 >
                    Februari 2019                </a>
            </li>
                <!-- <input id="beritasearch-bulan_arsip" class="form-control" name="BeritaSearch[bulan_arsip]" type="hidden"
        value=""> -->
    </ul>

<br/>
</form>
<script type="text/javascript">
// $(function(){
//  $('.kategori a').click(function(){
//      var id = $(this).data('text');
//      $('#beritasearch-id_berita_kategori').val(id);
//      $('form').submit();
//  });
//  $('.arsip a').click(function(){
//      var id = $(this).data('text');
//      $('#beritasearch-bulan_arsip').val(id);
//      $('form').submit();
//  });
// });
</script>
                        </div>
            <div class="col-sm-9" style="border-left: 1px dashed #ddd;min-height: 100vh;">
                <h2 class="post-title" style="font-weight: bold;">BERITA</h2>
                <hr/>
                <br/>
                                        <div class="blog-post">
                            <div class="media">
                                                                <div class="media-body">
                                    <a href="berita/index94d4.html?kategori=23-pemda-diy" class="category">Pemda DIY</a>
                                    <a href="berita/detail/7848-pembangunan-gedung-pkk-resmi-dimulai.html" class="post-title">Pembangunan Gedung PKK Resmi Dimulai</a>
                                    <div class="author">by <a href="search/index.html">Humas</a></div>
                                    <div class="meta">
                                        <div class="date"><i class="fa fa-calendar fa-fw"></i> 03 Juli 2019</div>
                                        <div class="tags">
                                            <i class="fa fa-tag"></i> <a href="berita/tag/agenda-kegiatan.html">Agenda Kegiatan</a>, <a href="berita/tag/fasilitas.html">Fasilitas</a>                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p style="text-align: justify;">Yogyakarta (02/07/2019)-&nbsp;Pemda DIY senantiasa berupaya&nbsp;memberikan pelayanan terbaik kepada masyarakat. Hal tersebut dapat diwujudkan dengan peningkatan kualitas pelayanan termasuk sarana dan prasarana untuk kesejahteraan masyarakat. Seperti misalnya memfasilitasi pembangunan gedung yang nantinya digunakan sebagai kantor PKK.
Adapun lokasi gedung tersebut akan berada di dalam Kompleks Kepatihan, tepatnya di sebelah barat Bale Tanjung. Pembangunan gedung tersebut telah resmi dimulai ...</p>
                        </div>
                                            <div class="blog-post">
                            <div class="media">
                                                                <div class="media-body">
                                    <a href="berita/index7fbf.html?kategori=22-wakil-gubernur-diy" class="category">Wakil Gubernur DIY</a>
                                    <a href="berita/detail/7847-sri-paduka-buka-gelar-pengawasan-daerah-diy-2019.html" class="post-title">Sri Paduka Buka Gelar Pengawasan Daerah DIY 2019</a>
                                    <div class="author">by <a href="search/index.html">Editor</a></div>
                                    <div class="meta">
                                        <div class="date"><i class="fa fa-calendar fa-fw"></i> 03 Juli 2019</div>
                                        <div class="tags">
                                            <i class="fa fa-tag"></i> <a href="berita/tag/agenda-kegiatan.html">Agenda Kegiatan</a>, <a href="berita/tag/berita.html">Berita</a>, <a href="berita/tag/20-daerah-istimewa-yogyakarta.html">Daerah Istimewa Yogyakarta</a>, <a href="berita/tag/22-pemda-diy.html">Pemda DIY</a>, <a href="berita/tag/17-pemerintahan.html">Pemerintahan</a>                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p style="text-align: justify;">Yogyakarta (03/07/2019) jogjaprov.go.id - Opini Wajar Tanpa Pengecualian (WTP) diberikan oleh Badan Pemeriksa Keuangan (BPK) RI kepada Pemerintah Daerah Daerah Istimewa Yogyakarta&nbsp;dan telah disampaikan dalam Rapat Paripurna DPRD DIY, Selasa (28/05) pagi. Dengan meraih WTP pada tahun 2019&nbsp;tersebut, Pemda DIY terhitung telah mendapatkan sembilan kali WTP secara berturut-turut sejak tahun 2010.
Meski demikian, masih terdapat beberapa temuan kekurangan yang harus diselesaikan oleh Pemda ...</p>
                        </div>
                                            <div class="blog-post">
                            <div class="media">
                                                                    <div class="media-left">
                                        <div class="thumbnail"><div class="bg" style="background-image: url('view_image/resize_no_frame/300/300/7271/Syawalan_Gembiraloka_Wagub%20(03.jpg).jpg');background-size:cover;"></div></div>
                                    </div>
                                                                <div class="media-body">
                                    <a href="berita/index7fbf.html?kategori=22-wakil-gubernur-diy" class="category">Wakil Gubernur DIY</a>
                                    <a href="berita/detail/7846-wakil-gubernur-diy-hadiri-syawalan-bersama-gl-zoo.html" class="post-title">Wakil Gubernur DIY Hadiri Syawalan  Gembira Loka Zoo</a>
                                    <div class="author">by <a href="search/index.html">Editor</a></div>
                                    <div class="meta">
                                        <div class="date"><i class="fa fa-calendar fa-fw"></i> 02 Juli 2019</div>
                                        <div class="tags">
                                            <i class="fa fa-tag"></i> <a href="berita/tag/agenda-kegiatan.html">Agenda Kegiatan</a>, <a href="berita/tag/berita.html">Berita</a>, <a href="berita/tag/21-jogja.html">Jogja</a>                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p style="text-align: justify;">
Yogyakarta (02/07/2019) jogjaprov.go.id&nbsp;- Wakil Gubernur DIY, KGPAA Paku Alam X menghadiri kegiatan syawalan bersama dengan keluarga besar PT Buana Alam Tirta Gembira Loka (GL) Zoo Yogyakarta. Adapun kegiatan tersebut digelar pada Selasa (02/07) mulai pukul 11.00 - 13.00 WIB di Aula.
Dalam kesempatan ini, Wakil Gubernur DIY bertindak sebagai Pembina Yayasan GL Zoo. Turut hadir mendampingi beliau Direktur Utama GL Zoo, KMT A.Tirtodiprojo dan Ketua Yayasan GL Zoo, Drs H. GBPH Yudhaningrat ...</p>
                        </div>
                                            <div class="blog-post">
                            <div class="media">
                                                                    <div class="media-left">
                                        <div class="thumbnail"><div class="bg" style="background-image: url('view_image/resize_no_frame/300/300/7279/02072019-Audiensi_LIPI_Wilis2.jpg');background-size:cover;"></div></div>
                                    </div>
                                                                <div class="media-body">
                                    <a href="berita/index7ce0.html?kategori=21-gubernur-diy" class="category">Gubernur DIY</a>
                                    <a href="berita/detail/7845-merapi-merbabu-menoreh-diusulkan-jadi-cagar-biosfer-dunia.html" class="post-title">Merapi, Merbabu, Menoreh Diusulkan Jadi Cagar Biosfer Dunia</a>
                                    <div class="author">by <a href="search/index.html">Humas</a></div>
                                    <div class="meta">
                                        <div class="date"><i class="fa fa-calendar fa-fw"></i> 02 Juli 2019</div>
                                        <div class="tags">
                                            <i class="fa fa-tag"></i> <a href="berita/tag/berita.html">Berita</a>                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p style="text-align: justify;">
&nbsp;
Yogyakarta (02/07/2019) jogjaprov.go.id &ndash; Merapi, Merbabu dan Menoreh akan didaftarkan sebagai cagar biosfer dunia ke UNESCO. Pendaftaran akan dilakukan September 2019 mendatang dan diharapkan akan disetujui pada sidang Man and The Biosphere Programme International Coordinating Council (MAB-ICC) UNESCO tahun 2020.
Hal tersebut dibahas dalam pertemuan antara Lembaga Ilmu Pengetahuan Indonesia (LIPI) dengan Gubernur DIY Sri Sultan Hamengku Buwono X, Selasa (02/07) di Ruang Gadri, ...</p>
                        </div>
                                            <div class="blog-post">
                            <div class="media">
                                                                    <div class="media-left">
                                        <div class="thumbnail"><div class="bg" style="background-image: url('view_image/resize_no_frame/800/800/7280/Antrax%20KP_1.jpg');background-size:cover;"></div></div>
                                    </div>
                                                                <div class="media-body">
                                    <a href="berita/index94d4.html?kategori=23-pemda-diy" class="category">Pemda DIY</a>
                                    <a href="berita/detail/7844-jelang-idul-adha-kulon-progo-antisipasi-penyakit-antraks.html" class="post-title">Jelang Idul Adha, Kulon Progo Antisipasi Penyakit Antraks   </a>
                                    <div class="author">by <a href="search/index.html">Editor</a></div>
                                    <div class="meta">
                                        <div class="date"><i class="fa fa-calendar fa-fw"></i> 02 Juli 2019</div>
                                        <div class="tags">
                                            <i class="fa fa-tag"></i> <a href="berita/tag/berita.html">Berita</a>, <a href="berita/tag/20-daerah-istimewa-yogyakarta.html">Daerah Istimewa Yogyakarta</a>, <a href="berita/tag/21-jogja.html">Jogja</a>                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p style="text-align: justify;">Yogyakarta (02/07/2019) jogjaprov.go.id &ndash; Menjelang Idul Adha, Pemda DIY melaksanakan pemantauan dan sosialisasi pencegahan penyakit hewan ternak di Kabupaten dan Kota.&nbsp;Adapun inti dari kegiatan ini adalah mendiskusikan wabah&ndash; wabah penyakit pada hewan ternak khususnya virus antraks pada sapi.&nbsp;Pada Selasa (02/07) pagi, periode sosialisasi dilakukan di Kantor Bupati Kulon Progo.

Kegiatan ini dilakukan sebagai salah satu cara pencegahan penyakit menular strategis pada ...</p>
                        </div>
                                    
                <br/>
                <div class="paging text-center">
                    <ul class="pagination"><li class="active"><a href="berita/indexaea0.html?page=1&amp;per-page=5" data-page="0">1</a></li>
<li><a href="berita/index21f8.html?page=2&amp;per-page=5" data-page="1">2</a></li>
<li><a href="berita/index5b2c.html?page=3&amp;per-page=5" data-page="2">3</a></li>
<li><a href="berita/index4573.html?page=4&amp;per-page=5" data-page="3">4</a></li>
<li><a href="berita/indexa6dd.html?page=5&amp;per-page=5" data-page="4">5</a></li>
<li><a href="berita/indexed5c.html?page=6&amp;per-page=5" data-page="5">6</a></li>
<li><a href="berita/index8afd.html?page=7&amp;per-page=5" data-page="6">7</a></li>
<li><a href="berita/index15d5.html?page=8&amp;per-page=5" data-page="7">8</a></li>
<li><a href="berita/index914b.html?page=9&amp;per-page=5" data-page="8">9</a></li>
<li><a href="berita/index1745.html?page=10&amp;per-page=5" data-page="9">10</a></li>
<li class="next"><a href="berita/index21f8.html?page=2&amp;per-page=5" data-page="1">&rsaquo;</a></li>
<li class="last"><a href="berita/indexe265.html?page=1036&amp;per-page=5" data-page="1035">&raquo;</a></li></ul>                </div>
            </div>
        </div>
    </div>
</div>

		<div id="footer">
			<div class="container">
				Copyright &copy; 2017 Pemerintah Daerah Istimewa Yogyakarta			</div>
		</div>
	
				<script type="text/javascript">
			$(function(){
				$('.navigation .navbar-nav > li > a:contains("Berita")').parent().addClass('active');
			});
		</script>
		<script type="text/javascript">
			$(function(){
				$('#footer_link').hide()
			});
		</script>
    <script src="assets/7c5cacc7/yii.activeForm.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
jQuery('#w0').yiiActiveForm([], []);
jQuery('#w1').yiiActiveForm([], []);
});</script></body>

<!-- Mirrored from jogjaprov.go.id/berita by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2019 03:40:04 GMT -->
</html>


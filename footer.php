<style>
	.social-icons a {
    margin-right: 15px; /* Jarak antara ikon */
    text-decoration: none;
}

.social-icons a:last-child {
    margin-right: 0; /* Menghapus margin pada ikon terakhir */
}

/* Gaya untuk modal dan video */
.video-modal {
    display: none; /* Mulanya disembunyikan */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.9); /* Lebih gelap agar lebih jelas */
    z-index: 1000;
}

.video-modal iframe {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    height: 80%;
    max-width: 80%;
    max-height: 80%;
}

.video-modal .close {
    position: absolute;
    top: 20px;
    right: 30px;
    font-size: 35px;
    color: #fff;
    cursor: pointer;
}
</style>


<!-- Modal overlay untuk video -->
<div id="videoModal" class="video-modal">
    <span class="close" onclick="closeVideoModal()">&times;</span>
    <iframe id="videoFrame" src="" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
</div>

<footer id="Footer" class="clearfix">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<hr class="no_line" style="margin:0 auto 120px"> </div>
					<div class="col-md-4">
						<figure class="wp-block-image size-full wp-image-21"><img loading="lazy" width="142" height="48" src="content/kurnia/images/kurnia_logo.png" class="wp-image-150" /> </figure>
						<p>Mitra terpercaya dalam menciptakan solusi konstruksi dan desain yang inovatif. Dengan pengalaman lebih dari 10 tahun.</p>
					</div>

					<div class="col-md-3">
						<h5>Product</h5>
						<p> <a href="?page=Interior">Interior Design</a>
							<br> <a href="?page=Construction">Construction</a>
							<br> <a href="?page=Furniture">Furniture</a>
						</p>
					</div>
					<div class="col-12 social-icons">
						<a href="https://www.instagram.com/kurnia.project/" target="_blank">
							<i class="fa fa-instagram" style="font-size:30px"></i>
						</a>
						<a href="https://www.tiktok.com/@kurnia.project" target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tiktok" viewBox="0 1 16 22">
								<path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
							</svg>
						</a>
						<a href="https://www.facebook.com/profile.php?id=61566782942967" target="_blank">
							<i class="fa fa-facebook" style="font-size:27px"></i>
						</a>
						<hr class="no_line" style="margin:0 auto 10px">
					</div>
			</div>
			<div class="footer_copy">
				<div class="container">
					<div class="column one"> <a id="back_to_top" class="footer_button" href="#"><i class="icon-up-open-big"></i></a>
						<div class="copyright"> &copy; <b>Kurnia Project</b></div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<div id="Side_slide" class="right light" data-width="250">
		<div class="close-wrapper"> <a href="#" class="close"><i class="icon-cancel-fine"></i></a> </div>
		<div class="extras">
			<div class="extras-wrapper"></div>
		</div>
		<div class="menu_wrapper"></div>
	</div>
	<div id="body_overlay"></div>
	<!-- JS -->
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/jquery-migrate-3.4.0.min.js"></script>
	<script src="js/mfn.menu.js"></script>
	<script src="js/jquery.plugins.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/animations/animations.js"></script>
	<script src="js/translate3d.js"></script>
	<script src="js/scripts.js"></script>
	<script src="plugins/rs-plugin-6.custom/js/revolution.tools.min.js"></script>
	<script src="plugins/rs-plugin-6.custom/js/rs6.min.js"></script>
	<script type="text/javascript">
	var revapi1, tpj;

	function revinit_revslider11() {
		jQuery(function() {
			tpj = jQuery;
			revapi1 = tpj("#rev_slider_1_1");
			if(revapi1 == undefined || revapi1.revolution == undefined) {
				revslider_showDoubleJqueryError("rev_slider_1_1");
			} else {
				revapi1.revolution({
					sliderLayout: "fullwidth",
					visibilityLevels: "1240,1240,778,778",
					gridwidth: "1400,1400,778,778",
					gridheight: "950,950,1100,1100",
					spinner: "spinner12",
					perspective: 600,
					perspectiveType: "global",
					spinnerclr: "#13d5ff",
					editorheight: "950,768,1100,720",
					responsiveLevels: "1240,1240,778,778",
					progressBar: {
						disableProgressBar: true
					},
					navigation: {
						onHoverStop: false
					},
					fallbacks: {
						allowHTML5AutoPlayOnAndroid: true
					},
				});
			}
		});
	} // End of RevInitScript
	var once_revslider11 = false;
	if(document.readyState === "loading") {
		document.addEventListener('readystatechange', function() {
			if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11) {
				once_revslider11 = true;
				revinit_revslider11();
			}
		});
	} else {
		once_revslider11 = true;
		revinit_revslider11();
	}
	</script>

	

<script>
function openVideoModal(videoId) {
    const videoModal = document.getElementById("videoModal");
    const videoFrame = document.getElementById("videoFrame");
    videoFrame.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
    videoModal.style.display = "block";
}

function closeVideoModal() {
    const videoModal = document.getElementById("videoModal");
    const videoFrame = document.getElementById("videoFrame");
    videoModal.style.display = "none";
    videoFrame.src = ""; // Menghapus src untuk menghentikan video
}
</script>

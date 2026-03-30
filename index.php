<?php
// Define your projects here in an array instead of a database
$projects = [
    [
        "title" => "Web Design",
        "category" => "Design",
        "image" => "https://images.pexels.com/photos/1779487/pexels-photo-1779487.jpeg?auto=compress&cs=tinysrgb&w=600",
        "link" => "#"
    ],
    [
        "title" => "Mobile App",
        "category" => "Development",
        "image" => "https://images.pexels.com/photos/1092644/pexels-photo-1092644.jpeg?auto=compress&cs=tinysrgb&w=600",
        "link" => "#"
    ],
    [
        "title" => "UI/UX Branding",
        "category" => "Marketing",
        "image" => "https://images.pexels.com/photos/3182773/pexels-photo-3182773.jpeg?auto=compress&cs=tinysrgb&w=600",
        "link" => "#"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clark - Personal Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    
    <style>
        :root { --primary-color: #ffbd39; --bg-dark: #000000; --card-bg: #1a1a1a; }
        body { background-color: var(--bg-dark); color: #fff; font-family: 'Poppins', sans-serif; scroll-behavior: smooth; }
        
        /* Navbar */
        .navbar { background: rgba(0,0,0,0.9); border-bottom: 1px solid #222; }
        .nav-link { color: #fff !important; font-weight: 500; text-transform: uppercase; font-size: 13px; letter-spacing: 1px; }
        .nav-link:hover { color: var(--primary-color) !important; }

        /* Hero Section */
        .hero { height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center; }
        .hero span { color: var(--primary-color); letter-spacing: 4px; text-transform: uppercase; font-size: 14px; }
        .hero h1 { font-size: 60px; font-weight: 800; margin: 20px 0; }
        .hero h1 span { color: var(--primary-color); font-size: inherit; letter-spacing: normal; }

        /* Sections */
        .section-padding { padding: 100px 0; }
        .heading-section h2 { font-size: 50px; font-weight: 700; }
        
        /* Project Cards */
        .project-item { position: relative; overflow: hidden; margin-bottom: 30px; height: 300px; border-radius: 8px; }
        .project-item img { width: 100%; height: 100%; object-fit: cover; transition: 0.3s; }
        .overlay { position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(255, 189, 57, 0.9); 
                    display: flex; flex-direction: column; align-items: center; justify-content: center; 
                    opacity: 0; transition: 0.5s; cursor: pointer; }
        .project-item:hover .overlay { opacity: 1; }
        .project-item:hover img { transform: scale(1.1); }
        .overlay h3 { color: #000; font-weight: 700; margin-bottom: 0; }
        .overlay span { color: #000; text-transform: uppercase; font-size: 12px; }

        /* Contact Form */
        .form-control { background: #1a1a1a; border: 1px solid #333; color: #fff !important; padding: 25px; }
        .form-control:focus { background: #222; border-color: var(--primary-color); box-shadow: none; }
        .btn-send { background: var(--primary-color); color: #000; padding: 15px 30px; border-radius: 30px; font-weight: 600; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="#" style="font-size: 24px;">CLARK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#projects" class="nav-link">Projects</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="home" class="hero">
    <div class="container">
        <span>HEY! I AM</span>
        <h1>Clark <span>Thompson</span></h1>
        <h3 class="font-weight-light">I'm a Web Designer based in London</h3>
    </div>
</section>

<section id="about" class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid rounded shadow" alt="Clark">
            </div>
            <div class="col-md-6 pl-md-5">
                <h2 class="mb-4">About Me</h2>
                <p class="text-secondary">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <div class="row mt-4">
                    <div class="col-6"><strong>Name:</strong> Clark Thompson</div>
                    <div class="col-6"><strong>Zip code:</strong> 1000</div>
                    <div class="col-6 mt-2"><strong>Address:</strong> San Francisco CA</div>
                    <div class="col-6 mt-2"><strong>Email:</strong> clark@gmail.com</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projects" class="section-padding bg-dark">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="font-weight-bold">Our Projects</h2>
            <p class="text-secondary">Far far away, behind the word mountains, far from the countries</p>
        </div>
        <div class="row">
            <?php foreach($projects as $project): ?>
            <div class="col-md-4">
                <div class="project-item">
                    <img src="<?php echo $project['image']; ?>" alt="">
                    <a href="<?php echo $project['link']; ?>" class="overlay">
                        <h3><?php echo $project['title']; ?></h3>
                        <span><?php echo $project['category']; ?></span>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="contact" class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="font-weight-bold">Contact Me</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-send">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="text-center py-4 border-top border-secondary">
    <p class="mb-0 text-secondary">&copy; 2026 Clark. All Rights Reserved.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
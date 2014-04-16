<!DOCTYPE html>
<html>
	<head>
		
		@include('admin.partials.assets')
		
		<style type="text/css">
		h2{
		    margin: 0;  
		    color: #FFFFFF;
		   padding-top: 90px;
		    font-size: 52px;
		    font-family: "trebuchet ms", sans-serif;    
		}
		.item{
		   /* background: #E038AD;*/
		        
		    text-align: center;
		    height: 500px !important;
		}
		#item1{
			background-image:url('https://www.google.co.th/images/srpr/logo11w.png');
			height: 500px;
		}
		#item2{
			background-image:url('http://jumpstartuidemo.com/themes/focus/img/masthead/masthead-2.jpg');
		}
		.carousel{
		    margin-top: 0;
		}
		.bs-example{
			margin: 20px;
		}

		</style>
		<title>carousel</title>
	</head>

	<body>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="active item">
            <h2>Slide 1</h2>
            <div class="carousel-caption" id="item1">
              <h3>First slide label</h3>
              <p>Lorem ipsum dolor sit amet consectetur…</p>
            </div>
        </div>
        <div class="item">
            <h2>Slide 2</h2>
            <div class="carousel-caption" id="item2">
              <h3>Second slide label</h3>
              <p>Aliquam sit amet gravida nibh, facilisis gravida…</p>
            </div>
        </div>
        <div class="item">
            <h2>Slide 3</h2>
            <div class="carousel-caption" id="item1">
              <h3>Third slide label</h3>
              <p>Praesent commodo cursus magna vel…</p>
            </div>
        </div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

	</body>

</html>
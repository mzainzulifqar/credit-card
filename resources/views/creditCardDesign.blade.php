<!DOCTYPE html>
<html lang="en">
<head>
  <title>Credit Card Design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/file-saver@2.0.2/dist/FileSaver.min.js"></script>
   <script>
    $(document).ready(function(){
      $('#Screenshot').click(function(){

          html2canvas($(".card")[0], {
            allowTaint: true, useCORS: true, logging: true, backgroundColor: null,taintTest: false,
            scale: 2,
          }).then(function(canvas) {  
              theCanvas = canvas;
              // canvas.toBlob(function(blob) {
              //     saveAs(blob, "Dashboard.png"); 
              // });
               // console.log(canvas.toDataURL());
               saveAs(canvas.toDataURL(), "Dashboard.png"); 
          });
      });
    });
   </script>
 <style>
@import url("https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i");
@import url('https://fonts.googleapis.com/css?family=Overpass+Mono');


:root {
  --purple: #892a92;
  --purple2: #70217a;
  --white: #f6d3fd;
  --height: 222px;
  --width: 350px;
  --font: "Overpass Mono", monospaced;
  --masterFont: "Raleway", sans-serif;
}

body {
  --baseColor: #c2e59c;
  overflow: hidden;
  margin: 0;
  padding: 0;
  background: transparent;
  /*background: linear-gradient(to right, #64b3f4, var(--baseColor));*/
}

.card {
  --heightCalc: - calc((var(--height) / 2) - 10px);
  --widthCalc: calc(var(--width) / 2);
  height: var(--height);
  width: var(--width);
  min-width: var(--width);
  background: linear-gradient(90deg, var(--purple), var(--purple2));
  /*background: lightgreen;*/
  border-radius: 10px;
  /*box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.2);*/
  margin: 10px auto;
  position: relative;
  /*filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.6));*/
  transform: translateY(calc(50% - 50px));
}

.card__figure {
  position: relative;
  height: 40px;
  margin: 0;
}

.card__figure::after {
  content: "PLATINUM";
  font-size: 0.45em;
  letter-spacing: 4px;
  color: var(--white);
  position: absolute;
  width: 100%;
  text-align: center;
  bottom: calc(-100% - 15px);
}

.card__figure--logo {
  --widthLogo: 57px;
  width: var(--widthLogo);
  position: absolute;
  right: 50%;
  transform: translate(calc(var(--widthLogo) / 2), 20px);
}

.card__reader {
  width: 50px;
  height: 40px;
  background: radial-gradient(#d9a56c, #b18457);
  border-radius: 5px;
  position: absolute;
  top: 50%;
  transform: translate(33px, -40px);
  overflow: hidden;
}

.card__reader--risk {
  width: 50px;
  height: 40px;
  border-radius: 13px;
  background: transparent;
  border: 1px solid #666;
  position: absolute;
  z-index: 0;
}

.card__reader--risk-one {
  transform: translate(37px, 15px);
}

.card__reader--risk-two {
  transform: translate(15px, 30px);
}

.card__reader--risk-three {
  transform: translate(-37px, -15px);
}

.card__reader--risk-four {
  transform: translate(-15px, -30px);
}

.card__number {
  font-family: var(--font);
  font-size: 1.15em;
  font-weight: normal;
  color: var(--white);
  letter-spacing: 2.5px;
  text-align: center;
  margin-left: -20px;
  margin-top: 80px;
  z-index: 1;
  position: relative;
  filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.3));
}

.card__number::before,
.card__number::after {
  font-family: Arial;
  color: rgba(0, 0, 0, 0.4);
  font-size: 0.4em;
  position: absolute;
  letter-spacing: 0px;
}

.card__number::before {
  content: "5032";
  transform: translate(15px, 22px);
}

.card__number::after {
  content: "Valid thru";
  width: 80px;
  transform: translate(-215px, 22px);
}

.card__dates {
  position: absolute;
  width: 40%;
  font-size: .9em;
  display: flex;
  justify-content: space-between;
  color: var(--white);
  font-family: var(--font);
  bottom: 22%;
  transform: translate(60px, 0px);
}

.card__dates span {
  filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.3));
}

.card__name {
  font-family: var(--font);
  font-size: .9em;
  font-weight: normal;
  color: var(--white);
  letter-spacing: 2.5px;
  transform: translate(35px, 25px);
  position: relative;
  filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.3));
}

.card__flag {
  right: 30px;
  top: 45%;
  border-radius: 25px;
  transform: translate(0, -28px);
  position: absolute;
  height: 110px;
  width: 80px;
  /*border: 1px solid rgba(0, 0, 0, 0.3);*/
}

.card__flag--globe {
  --margin: 5px;
  width: calc(100% - (var(--margin) * 2));
  background-color: #b7b2b8;
  height: 50%;
  border-radius: 20px;
  margin: var(--margin);
  background: repeating-linear-gradient(
    0deg,
    #dbd1dc,
    #dbd1dc 5px,
    #b2aab5 7px,
    #b2aab5 5px
  );
}

.card__flag--globe::after,
.card__flag--globe::before {
  content: "\f0ac";
  font-family: FontAwesome;
  color: rgba(0, 0, 0, 0.2);
  font-size: 3em;
  top: 6px;
  left: 2px;
  position: absolute;
}

.card__flag--globe::after {
  transform: translateX(10px);
}

.card__flag--globe::before {
  transform: translateX(25px);
}

.card__flag--red {
  position: absolute;
  left: 5px;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #ce0e1d;
}

.card__flag--yellow {
  position: absolute;
  right: 5px;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #e39833;
}

.card__flag--yellow::after {
  content: "MasterCard";
  position: absolute;
  font-size: 0.7em;
  top: 50%;
  transform: translate(-25px, -7px);
  font-family: var(--masterFont);
  font-style: italic;
  font-weight: 800;
  color: var(--white);
  filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.5));
}

.assign {
  text-align: center;
  margin-top: 113px;
  font-family: var(--masterFont);
  color: #fff;
  font-size: 0.8em;
  filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.3));
}

.assign a {
  text-decoration: none;
  font-weight: 700;
  color: #FFF;
}

.assign a::hover {
  color: var(--purple);
}

  </style>
</head>
<body>
 <div id="canvasImg" class="p-4 border shadow"></div>
    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-lg-6">
             <h4><strong>Select The Options For Design the Credit Card</strong></h4>
             <br><br>
             <form action="/action_page.php">
              
        <div class="form-group">
            <div class="form-group">
                <label for="exampleInputEmail1">Company Name</label>
                <input type="email" class="form-control" id="company_name" aria-describedby="emailHelp" placeholder="Enter Company Name">
                <small id="emailHelp" class="form-text text-muted">Add a Company Name For Preview</small>
            </div>
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="exampleInputEmail1">Select Background</label>
                <input type="file" class="form-control" id="background" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Select a Background Color For Preview</small>
            </div>
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="exampleInputEmail1">Upload a Logo</label>
                <input type="file" class="form-control" id="logo" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Select a Logo  For Preview</small>
            </div>
        </div>


        {{-- <button type="submit" class="btn btn-success">Submit</button> --}}
    </form>
</div>
<div class="col-lg-6">
    <h4><strong>Preview The Credit Card</strong></h4>
   <div class="card" id="cardHolder" style="background-color: transparent;">
     
      <figure class="card__figure">
        <img crossorigin="anonymous" src="{{ asset('image/nu-white.png') }}" class="card__figure--logo"></img>
      </figure>
   
    <div class="card__reader">
      <div class="card__reader--risk card__reader--risk-one"></div>
      <div class="card__reader--risk card__reader--risk-two"></div>
       <div class="card__reader--risk card__reader--risk-three"></div>
      <div class="card__reader--risk card__reader--risk-four"></div>
    </div>

    <p class="card__number">5032 9334 3764 9846</p>
    <div class="card__dates">
      <span class="card__dates--first">09/16</span>
      <span class="card__dates--second">09/19</span>
    </div>
   
    <p class="card__name">David FERREIRA<p>
    <div class="card__flag">
      <div class="card__flag--red"></div>
       <div class="card__flag--yellow"></div>
    </div>
   
    </div>
    <div class="assign">
    
    </div>   

<br>
<button id="Screenshot" class="btn btn-success mt-2 pt-2">Save Image</button>

</div>
</div>

</div>

<script>
  
  $(document).ready(function(){

    // Multiple images preview in browser
      function imagesPreview(input, placeToInsertImagePreview) {
  
          if (input.files) {
              var filesAmount = input.files.length;
  
              var reader = new FileReader();
              reader.onload = function(event) {
                if (placeToInsertImagePreview == '.card') {
                  $(placeToInsertImagePreview).css({"background-image": "url(" + event.target.result + ")",
                    "object-fit" : "cover","background-size": "cover","background-repeat":"no-repeat",
                    "background-position": "center"});

                }
                else
                {
                  $(placeToInsertImagePreview).attr('src',event.target.result);
                }
              }
              reader.readAsDataURL(input.files[0]);
          }
      };

    $('#company_name').on('keyup',function(){
        $('.card__name').text($(this).val());
    });

    $('#logo').change(function(){
          imagesPreview(this,'.card__figure--logo');
    });

     $('#background').change(function(){
          imagesPreview(this,'.card');
    });

    


    
  });
</script>
</body>
</html>

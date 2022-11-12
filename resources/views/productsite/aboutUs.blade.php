@include('productsite.layout.mainlayout')
<style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  /* padding: 50px; */
  text-align: left;
  /* background-color: #474e5d; */
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.about-section{
    margin-top: 100px;
}
.abouttitle{
    color: white;
}
.carousel-item{
  height: 600px;
  width: 100%;
}
.spanclass{
  color: blue;
  text-decoration: underline;
}
.mainheading{
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 15px;
}
.links{
  text-decoration: underline !important;
  color: darkblue;
}
</style>
<section>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Picture11.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/Picture11.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/Picture11.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<section>
<div class="container">
    <div class="about-section text-align-left">
      <!-- <h1 class="abouttitle">About Us Page</h1> -->
    </div>
      <div class="row">
        <div class="col-md-12">
          <h5>At Holisol, customer-centricity is our core value and we are always thinking of making life easier for our customers, and one of the ways to do that is to offer One-Stop Shop for all your packaging and logistics needs. </h5>
          <h5>We manage your fulfilment in our warehouses and fulfilment centres, your need to design right packaging solution for your product, find packaging suppliers of various packaging material, place orders and manage inventory of these supplies. </h5>
          <h5>Holisol will do all this for you as single point of contact with the launch of PackProSol <b>- a full service B2B digital platform to facilitate the buying and selling of packing products and <span class="spanclass"> packaging services</span> with utmost ease.</b></h5>
          <h5><b>PackProSol</b> caters to your <b>packaging requirements </b> comprising of <b>packing procurement,</b> development of <b> customised packing solutions, execution of packaging services </b> all <b> on a single platform.</b> </h5>
          <h5><b>The idea is to digitize the B2B marketplace </b> for packaging products in India by directly involving seller with buyers for driving efficiencies, increase business volume and reducing costs.</h5>
        </div>
      </div>
      <p class="mainheading test-align-left">PackProSol is a tech-based solution developed by Holisol to provide one stop <br> digital platform for all your packaging needs </p>

      <h2 style="text-align:left">Advantages of associating with us:</h2>
        <div class="row">
          <div class="col-md-12">
            <h5> <i class="bi bi-asterisk"></i> A gamut of packaging products available on single platform</h5><br>
            <h5><i class="bi bi-asterisk"></i> Cost benefits due to volume maximization passed on to clients directly</h5>
            <h5><i class="bi bi-asterisk"></i> Cost benefits by way of value engineering in packaging</h5>
            <h5><i class="bi bi-asterisk"></i> Cost of packing material procurement reduced drastically</h5>
            <h5><i class="bi bi-asterisk"></i> No need for client to manage packaging inventory</h5>
            <h5><i class="bi bi-asterisk"></i> Pay on use basis</h5>
            <h5><i class="bi bi-asterisk"></i> Packaging expertise to assist you on packaging development</h5>
            <h5><i class="bi bi-asterisk"></i>   Automation at warehouse/s to facilitate increase in productivity and improved EHS and Ergonomics</h5> <br><br>
            <h5>To know more about the solutions please get in touch with our expert Shailendra P Parkar at 9930077735 and write to him at <a class="links" href="shailendra.parkar@holisollogistics.com" target="_blank">shailendra.parkar@holisollogistics.com.</a> </h5><br>
          </div>
        </div>
  </div>
</section>
@include('productsite.inc.footer')

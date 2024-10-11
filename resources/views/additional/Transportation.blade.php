<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BridgeWay Logistics</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/transportation.css">
  <link rel="apple-touch-icon" sizes="180x180" href="img/flaticon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/flaticon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/flaticon/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
		
  
</head>
<body>

<div class="container">
  <h3 class="getquotetext">Get Logistics Quote</h3>
  <div class="blocks">
    <div class="left">
      <p>Pickup Location</p>
      <div class="select">
        <div class="selectBtn" data-type="firstOption"><i class="fas fa-map-marker-alt"></i>Toronto</div>
        <div class="selectDropdown">
          <div class="option" data-type="firstOption"><i class="fas fa-map-marker-alt"></i>Toronto</div>
          <div class="option" data-type="secondOption"><i class="fas fa-map-marker-alt"></i>Vancouver</div>
          <div class="option" data-type="thirdOption"><i class="fas fa-map-marker-alt"></i>Montreal</div>
        </div>
      </div>
      <p>Delivery Location</p>
      <div class="select">
        <div class="selectBtn" data-type="firstOption"><i class="fas fa-map-marker-alt"></i>Vancouver</div>
        <div class="selectDropdown">
          <div class="option" data-type="firstOption"><i class="fas fa-map-marker-alt"></i>Toronto</div>
          <div class="option" data-type="secondOption"><i class="fas fa-map-marker-alt"></i>Vancouver</div>
          <div class="option" data-type="thirdOption"><i class="fas fa-map-marker-alt"></i>Montreal</div>
        </div>
      </div>
      <p>Pickup Date</p>
      <div class="date-input-container">
        <i class="fas fa-calendar-alt date-icon"></i>
        <input class="date-input-field" type="date" id="sourcedatepicker" placeholder="mm/dd/yyyy">
      </div>
      <p>Delivery Date</p>
      <div class="date-input-container">
        <i class="fas fa-calendar-alt date-icon"></i>
        <input class="date-input-field" type="date" id="destinationdatepicker" placeholder="mm/dd/yyyy">
      </div>
      <p>Cargo Type</p>
      <div class="select">
        <div class="selectBtn" data-type="firstOption"><i class="fas fa-box"></i>General Cargo</div>
        <div class="selectDropdown">
          <div class="option" data-type="firstOption"><i class="fas fa-box"></i>General Cargo</div>
          <div class="option" data-type="secondOption"><i class="fas fa-box"></i>Perishables</div>
          <div class="option" data-type="thirdOption"><i class="fas fa-box"></i>Hazardous Materials</div>
        </div>
      </div>
      <p>Cargo Weight</p>
      <div class="select">
        <div class="selectBtn" data-type="firstOption"><i class="fas fa-weight-hanging"></i>100 kg</div>
        <div class="selectDropdown">
          <div class="option" data-type="firstOption"><i class="fas fa-weight-hanging"></i>50 kg</div>
          <div class="option" data-type="secondOption"><i class="fas fa-weight-hanging"></i>100 kg</div>
          <div class="option" data-type="thirdOption"><i class="fas fa-weight-hanging"></i>200 kg</div>
        </div>
      </div>
    </div>
    <div class="right">
      <div class="trip-detail-container">
        <div class="one-way-container">
          <h3 class="trip-detail-title">Shipment Details</h3>
          <table>
            <tr><td>From</td><td>Toronto</td></tr>
            <tr><td>To</td><td>Vancouver</td></tr>
            <tr><td>Cargo Type</td><td>General Cargo</td></tr>
            <tr><td>Pickup Date</td><td>2023-08-28</td></tr>
            <tr><td>Delivery Date</td><td>2023-08-29</td></tr>
            <tr><td>Weight</td><td>100 kg</td></tr>
          </table>
        </div>
        <hr>
        <div class="price-container">
          <h3 class="trip-detail-title">Price</h3>
          <table>
            <tr><td>Base Price</td><td>CA $500</td></tr>
            <tr><td>Tax</td><td>CA $50</td></tr>
            <tr><td>Total Price</td><td>CA $550</td></tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="buttons">
    <button type="button">Get Quote</button>
    <button type="button">Book Shipment</button>
  </div>
</div>
<script src="js/transportation.js"></script>
</body>
</html>

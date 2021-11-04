<html>
<head>
  <title>Operation Report</title>

  <link rel="stylesheet" href="css/admin_style.css">
  <style>
  .content-wrapper{
    background: #FFF;
  }
  .invoice-header {
    background: #f7f7f7;
    padding: 10px 20px 10px 20px;
    border-bottom: 1px solid gray;
}
.invoice-right-top h3 {
    padding-right: 20px;
    margin-top: 20px;
    color: #ec5d01;
    font-size: 55px!important;
    font-family: serif;
}
.invoice-left-top {
    border-left: 4px solid #ec5d00;
    padding-left: 20px;
    padding-top: 20px;
}
thead {
        background: #ec5d01;
        color: #FFF;
    }

    .authority h5 {
        margin-top: -10px;
        color: #ec5d01;
        /*text-align: center;*/
    }
    .thanks h4 {
        color: #ec5d01;
        font-size: 25px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
    .site-address p {
          line-height: 6px;
          font-weight: 300;
      }
</style>
</head>
<body>

  <div class="content-wrapper">

    <div class="invoice-header">
      <div class="float-left site-logo">
        
      </div>
      <div class="float-right site-address">
        <h4>Doctor Care</h4>
        <p>Dhaka, Bangladesh</p>
        
        <p>Email: <a href="#">stepin814@gmail.com</a></p>
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="invoice-description">
      <div class="invoice-left-top float-left">
        <h2>Operation Report</h2>
        <h6>Patient Name</h6>
         <h3>{{ $user->name }}</h3>
         <div class="address">
          <p>
            <strong>Doctor Name: </strong>
            {{ $user->doctorName }}
          </p>
          <p>
          <strong>Operation Date: </strong>
            {{ $user->date }}
          </p>
          <p>
          <strong>Details: </strong>
            {{ $user->details }}
          </p>
           
        

        <div class="thanks mt-3">
          <h4>Thank you !!</h4>
        </div>

        <div class="authority float-right mt-5">
            <p>-----------------------------------</p>
            <h5>Authority Signature:</h5>
          </div>
          <div class="clearfix"></div>

  </div>

</body>
</html>
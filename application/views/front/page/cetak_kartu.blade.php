
<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<style>
	.grid-container {
  display: grid;
  grid-template-columns: 10% 20% 60%;
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  
  padding: 20px 0;
  font-size: 20px;
}

.item1 {
  grid-row-end: span 4;
}
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 200px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
* {
  box-sizing: border-box;
}
	</style>
</head>

<body>
<div class="wrap">
<section class="site-section py-lg">
    <div class="container">
        <div class="card">
            <!-- tabel header -->
            <!-- <table>
                <tr align="center">
                    
                    <td colspan="" align="right" style="border: 0px"><br><br>
                        <img src="{{ base_url('assets/wordify/') }}images/logo.jpg" alt="" align="center" width="128" height="120"> 
                    </td>
                    <td colspan="" style="text-align: left; border: 0px">
                        <br><br><br>
                        <h5 style="padding-left:40px;">
                        YAYASAN MA'HAD DARUN NAJAH<br>
                        PONDOK PESANTREN PPAI DARUN NAJAH<br>
                        Jl. Pesantren, No. 51, Ngijo, Karangploso, Malang, (0341)5034501<br>
                        </h5>
                    </td>
                </tr>
            </table><hr>  -->
            <!-- tabel header end -->

            <div class="row">
                <div class="column" align="right">
                    <img src="{{ base_url('assets/wordify/') }}images/logo.jpg" alt="" align="center" width="128" height="120"> 
                </div>
                <div class="column">
                    <h3 style="padding-left:40px;">
                        YAYASAN MA'HAD DARUN NAJAH<br>
                        PONDOK PESANTREN PPAI DARUN NAJAH<br>
                        Jl. Pesantren, No. 51, Ngijo, Karangploso, Malang, (0341)5034501<br>
                    </h3>
                </div>
            </div>
            <!-- card body start -->
            <div class="card-body">
                <!-- row start -->
                <div class="row">  
                    <div class="grid-container">
                        <div class="item1"><img src="" alt="" align="right" style=" padding-left:15px;width:150px; height:200px; background-color:#eeeeee"></div>
                        <div class="item2" style="text-align: right; padding-right:15px;">Nama</div>
                        <div class="item3" style="text-align: left; padding-left:15px;">Aura Kanza Caesaria</div>  
                        <div class="item4" style="text-align: right; padding-right:15px;">TTL</div>
                        <div class="item5" style="text-align: left; padding-left:15px;">Banjarmasin, 11 Februari 1998</div>
                        <div class="item6" style="text-align: right; padding-right:15px;">Alamat</div>
                        <div class="item7" style="text-align: left; padding-left:15px;">Jl. Soekarno Hatta no.1</div>
                        <div class="item8" style="text-align: right; padding-right:15px;">Telp</div>
                        <div class="item9" style="text-align: left; padding-left:15px;">990909</div>
                    </div>
                </div>
                <!-- row end -->
                <br>
            </div> <!-- card body start -->

            
                <!-- tabel footer -->
                
                <!-- tabel footer end -->
            <br>
        </div>
    </div>
</section>
</div>	
		
</body>
</html>

<div class="tabs-span-node">
	<div>
		<h4><?php echo $coinbase;?>/<?php echo $symbol;?></h4>
	</div>

	<div>
		Giá gần nhất<br>
		0.062710 $502.31
	</div>


	<div>
		Thay đổi giá 24h<br>
		-0.000252 -0.40%
	</div>


	<div>
		Giá cao nhất 24h<br>
		0.064686
	</div>
	
	<div>
		Giá thấp nhất 24h<br>
		0.062100
	</div>

	<div>
		Khối lượng 24h<br>
		11,011.69 BTC
	</div>


</div>

<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/drag-panes.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>

<div class="row sbox">
	<div class="col-lg-9">
		<div id="container" style="height: 550px; min-width: 310px"></div>

		<br>

		<div class="card">
			<div class="card-body fix400">
				<div class="row">
					<div class="col-md-4">
						
							<h4>Buy</h4>
							Your :  0.000006 <?php echo $coinbase;?>
							<form>
								<div class="form-group">
		                            <label for="input2EmailForm" class="form-control-label"><?php echo $this->views->lang("amout");?></label>
		                            <div class="mx-auto">
		                                <input type="number" name="amout" class="form-control" id="input2EmailForm" placeholder="Amout" required="true">
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <label for="input2EmailForm" class="form-control-label"><?php echo $this->views->lang("prices");?></label>
		                            <div class="mx-auto">
		                                <input type="number" name="amout" class="form-control" id="input2EmailForm" placeholder="Prices" required="true">
		                            </div>
		                        </div>

		                        <hr>
		                        Total : <br>
		                        Fee : 
		                        <hr>
		                        <button class="btn btn-primary btn-block">Buy</button>

							</form>
						
					</div>

					<div class="col-md-4">
						
							<h4>Sell</h4>
							Your :  1 <?php echo $symbol;?>
							<form>
								<div class="form-group">
		                            <label for="input2EmailForm" class="form-control-label"><?php echo $this->views->lang("amout");?></label>
		                            <div class="mx-auto">
		                                <input type="number" name="amout" class="form-control" id="input2EmailForm" placeholder="email" required="true">
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <label for="input2EmailForm" class="form-control-label"><?php echo $this->views->lang("prices");?></label>
		                            <div class="mx-auto">
		                                <input type="number" name="amout" class="form-control" id="input2EmailForm" placeholder="email" required="true">
		                            </div>
		                        </div>

		                        <hr>
		                        Total : <br>
		                        Fee : 
		                        <hr>
		                        <button class="btn btn-info btn-block">Sell</button>

							</form>
						
					</div>


					<div class="col-md-4">
						
							<h4>Stop Loss</h4>
							Your :  1 <?php echo $symbol;?>
							<form>
								<div class="form-group">
		                            <label for="input2EmailForm" class="form-control-label"><?php echo $this->views->lang("amout");?></label>
		                            <div class="mx-auto">
		                                <input type="number" name="amout" class="form-control" id="input2EmailForm" placeholder="email" required="true">
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <label for="input2EmailForm" class="form-control-label"><?php echo $this->views->lang("prices");?></label>
		                            <div class="mx-auto">
		                                <input type="number" name="amout" class="form-control" id="input2EmailForm" placeholder="email" required="true">
		                            </div>
		                        </div>

		                        <hr>
		                        Total : <br>
		                        Fee : 
		                        <hr>
		                        <button class="btn btn-info btn-block">Sell</button>

							</form>
						
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="card">
			<div class="card-body">
				<table class="table table-hover">
		            <thead>
		              <th style="border-top:0;">Name</th>
		              <th style="border-top:0;">Prices</th>
		              <th style="border-top:0;">Vol</th>
		            </thead>
		            <tbody>
		              <?php foreach ($coind as $key => $value) { ?>
		              <tr>
		                <td><a href="<?php echo router("exchange/trade/BTC/".$value["symbol"]);?>"><?php echo $value["symbol"];?></a></td>
		                <td>6700</td>
		                <td>89</td>
		              </tr>
		              <?php } ?>
		              
		            </tbody>
		          </table>
		    </div>
		</div>

		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						
							<div class="sroolHeader">
								<h4>Buy</h4>
								<table class="table table-hover table-sm" style="margin-bottom: 0;">
									<thead>
										<th class="col-xs-3" style="border-bottom:0;">Amout</th>
										<th class="col-xs-3" style="border-bottom:0;">Prices</th>
										<th style="border-bottom:0;">Total</th>
									</thead>
								</table>
							</div>
							<div class="sroolBody">
								<table class="table table-hover table-sm">
									<tbody>
										<?php for ($i=0; $i<=10;$i++) { ?>
											
										<tr id="item-<?php echo $i;?>">
											<td class="col-xs-3">-</td>
											<td class="col-xs-3">-</td>
											<td>-</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						
					</div>

					<div class="col-md-12">
						
							<div class="sroolHeader">
								<h4>Sell</h4>
								<table class="table table-hover table-sm" style="margin-bottom: 0;">
									<thead>
										<th class="col-xs-3" style="border-bottom:0;">Amout</th>
										<th class="col-xs-3" style="border-bottom:0;">Prices</th>
										<th style="border-bottom:0;">Total</th>
									</thead>
								</table>
							</div>
							<div class="sroolBody">
								<table class="table table-hover table-sm">
									<tbody>
										<?php for ($i=0; $i<=10;$i++) { ?>
											
										<tr id="item-<?php echo $i;?>">
											<td class="col-xs-3">-</td>
											<td class="col-xs-3">-</td>
											<td>-</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>

					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12"><br></div>
	

	

	<!--//My Trade -->
	<div class="col-md-6">
		<div class="card">
			<div class="card-body fix400">
				<ul class="nav nav-tabs navtabs-history">
				  <li class="nav-item">
				    <a class="nav-link active" href="#">Active</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">Cancel order</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">My Trade</a>
				  </li>
				  
				</ul>
			</div>
		</div>
	</div>


	<!--//My Trade -->
	<div class="col-md-6">
		<div class="card">
			<div class="card-body fix400 orderBook">
				<div class="sroolHeader">
					<h4>Order book</h4>
					<table class="table table-hover" style="margin-bottom: 0;">
						<thead>
							<th class="col-xs-3" style="border-bottom:0;">Amout</th>
							<th class="col-xs-3" style="border-bottom:0;">Prices</th>
							<th style="border-bottom:0;">Total</th>
						</thead>
					</table>
				</div>
				<div class="sroolBody">
					<table class="table table-hover">
						<tbody id="order">
							<?php for ($i=0; $i<=49;$i++) { ?>
								
							<tr id="item-<?php echo $i;?>">
								<td class="col-xs-3">-</td>
								<td class="col-xs-3">-</td>
								<td>-</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</div>

</div>
<style type="text/css">
	.sroolBody{
		overflow-y: scroll;
	}
</style>
<script type="text/javascript">
	var coinbase = '<?php echo $coinbase;?>';
	var symbol = '<?php echo $symbol;?>';



	var chart =	function(){
		$.getJSON('/ohlcv.json', function (data) {

		    // split the data set into ohlc and volume
		    var ohlc = [],
		        volume = [],
		        dataLength = data.length,
		        // set the allowed units for data grouping
		        groupingUnits = [[
		            'week',                         // unit name
		            [1]                             // allowed multiples
		        ], [
		            'month',
		            [1, 2, 3, 4, 6]
		        ]],

		        i = 0;

		    for (i; i < dataLength; i += 1) {
		        ohlc.push([
		            data[i][0], // the date
		            data[i][1], // open
		            data[i][2], // high
		            data[i][3], // low
		            data[i][4] // close
		        ]);

		        volume.push([
		            data[i][0], // the date
		            data[i][5] // the volume
		        ]);
		    }


		    // create the chart
		    Highcharts.stockChart('container', {

		        rangeSelector: {
		            selected: 1
		        },

		        title: {
		            text: 'AAPL Historical'
		        },

		        yAxis: [{
		            labels: {
		                align: 'right',
		                x: -3
		            },
		            title: {
		                text: 'OHLC'
		            },
		            height: '60%',
		            lineWidth: 2,
		            resize: {
		                enabled: true
		            }
		        }, {
		            labels: {
		                align: 'right',
		                x: -3
		            },
		            title: {
		                text: 'Volume'
		            },
		            top: '65%',
		            height: '35%',
		            offset: 0,
		            lineWidth: 2
		        }],

		        tooltip: {
		            split: true
		        },

		        series: [{
		            type: 'candlestick',
		            name: 'AAPL',
		            data: ohlc,
		            dataGrouping: {
		                units: groupingUnits
		            }
		        }, {
		            type: 'column',
		            name: 'Volume',
		            data: volume,
		            yAxis: 1,
		            dataGrouping: {
		                units: groupingUnits
		            }
		        }]
		    });
		});
	};

	$(document).ready(function(){
		$(".orderBook .sroolBody").each(function(index, value){
			var height = $(this).parent().outerHeight() - $(this).parent().find(".sroolHeader").outerHeight() - 30;

			$(this).height(height);
		});

		var height = $(".tradeBook").outerHeight() - $(".tradeBook .sroolHeader").first().outerHeight() - 30;
		
		$(".tradeBook .sroolBody").height(height);
		chart();
	});



</script>
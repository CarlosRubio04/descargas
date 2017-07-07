<!-- Modal img -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" onclick="stop()" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">
					<i class="fa fa-cloud-download " aria-hidden="true"></i> FullDescargas
				</h4>
			</div>
			<div class="modal-body">
				<img alt="Download" class="img-responsive">
			</div>
			<div class="modal-footer">
				<button><i class="fa fa-cloud-download fa-2x" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>
</div>

<!-- Modal Video -->
<div class="modal fade bs-example-modal-lg" id="viewModalVideo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" onclick="stop()" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myLargeModalLabel">
					<i class="fa fa-cloud-download " aria-hidden="true"></i> FullDescargas
				</h4>
			</div>
			<div class="modal-body">
				<div class="embed-responsive embed-responsive-16by9">
					<video width="100%" id="myVideo">
						Your browser does not support the video tag.
					</video>
				</div>
			</div>
			<div class="modal-footer">
				<button onclick="play()"><i class="fa fa-play-circle-o fa-2x" aria-hidden="true"></i></button>
				<button onclick="stop()"><i class="fa fa-stop-circle-o fa-2x" aria-hidden="true"></i></button>
				<button onclick="fullScreen()"><i class="fa fa-expand fa-2x" aria-hidden="true"></i></button>
				<button><i class="fa fa-cloud-download fa-2x" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>
</div>
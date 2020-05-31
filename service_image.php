<div class="container">
	<div class="row">
		<div class="col-md-4 border">
		<form id="upload_form">
			<label for="file">Choose file</label>
			<input type="file" id="fileinput" />
			
		</form>
		</div>
		<div class="col-md-4 border">
			<div class="thumbnail">
				<img id="source_image"  style="width:100%">
				<div class="caption">
					<p>Source Image</p>
					<p><input type="button" id="compress" value="Compress" class="btn-primary" style="display: none;"></p>
				</div>
			</div>
		</div>
		<div class="col-md-4 border">
			<div class="thumbnail">
				<img id="compressed_image"  style="width:100%">
				<div class="caption">
					<p>Compressed Image</p>
					<p><input type="button" id="upload" class="btn-success" value="Upload" style="display: none;"></p>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="assets/js/image.js"></script>

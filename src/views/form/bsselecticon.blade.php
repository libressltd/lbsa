<div class="form-group">
	@if (isset($title))
	<label class="control-label">{{ $title }}</label>
	@endif
    <input class="form-control icp icp-auto" value="fa-anchor" type="text" />
</div>

@push("script")
<script type="text/javascript">
	$(function() {
		$('.icp-auto').iconpicker();
	});
</script>
@endpush
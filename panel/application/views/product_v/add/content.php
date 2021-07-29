<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Ürün Ekle
            <a href="#" class="btn btn-outline btn-primary btn-xs pull-right"><i class="fa fa-plus"></i>Yeni Ekle</a>
        </h4>
    </div>

	<div class="col-md-12">
				<div class="widget">
					<div class="widget-body">						
						<form action="<?php echo base_url("product/save");  ?>" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">Başlık</label>
								<input type="text" class="form-control" placeholder="Başlık" name="title">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Açıklama</label>
				                <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}"></textarea>

							</div>							
							<button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
						    <a href="<?php echo base_url("product"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                        </form>
					</div><!-- .widget-body -->
				</div><!-- .widget --> 
			</div><!-- END column -->

</div>

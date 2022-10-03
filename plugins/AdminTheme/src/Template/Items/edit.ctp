<section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"><?= __('Acciones') ?></h3>

              <div class="box-tools">
                <button data-widget="collapse" class="btn btn-box-tool" type="button"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding" style="display: block;">
              <ul class="nav nav-pills nav-stacked">
			  <li>
				<li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?>
				</li>
			   <li><?= $this->Html->link(__('Crear'), ['action' => 'add']) ?></li>
				<li class="active"><?= $this->Html->link(__('Editar'), ['action' => 'edit', $item->id]) ?> </li>
				<li><?= $this->Html->link(__('Ver'), ['action' => 'view', $item->id]) ?> </li>
				<li><?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $item->id],
                ['confirm' => __('estas seguro que quieres borrarlo # {0}?', $item->id)]
            )
				?></li>			   
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->		    
        </div>
		
		
        <!-- /.col -->
        <div class="col-md-9">
          
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"><?= __('Editar Rubro')?> </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <div class="pull">
              <?= $this->Form->create($item); ?>
        <?php
            echo $this->Form->input('item_classification_id', ['options' => $itemsClassifications,'label'=>'Cuentas o Proyecto']);
            echo $this->Form->input('name',['label'=>'Nombre']);
            echo $this->Form->input('item',['label'=>'Rubro']);
         ?>
              
            
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn-success']) ?>
              </div>
             
            </div>
			<?= $this->Form->end() ?>
            <!-- /.box-footer -->
			</div>
			</div>
			
			
			
			
			 </div>
			</div>		
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
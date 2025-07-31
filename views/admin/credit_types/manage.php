<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h4 class="bold">Novo Tipo de Crédito</h4>
<?php echo form_open(admin_url('banco_comissoes/tipos/salvar')); ?>

<div class="form-group">
  <label>Nome do Tipo de Crédito</label>
  <input type="text" name="name" class="form-control" required>
</div>

<button type="submit" class="btn btn-info">Salvar Tipo</button>
<?php echo form_close(); ?>

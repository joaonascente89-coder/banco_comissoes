<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h4 class="bold">Nova Proposta</h4>
<?php echo form_open(admin_url('banco_comissoes/propostas/salvar')); ?>

<div class="form-group">
  <label>Correspondente</label>
  <select name="correspondent_id" class="form-control" required>
    <?php foreach ($correspondents as $correspondent): ?>
      <option value="<?= $correspondent['staffid']; ?>"><?= $correspondent['firstname']; ?></option>
    <?php endforeach; ?>
  </select>
</div>

<div class="form-group">
  <label>Tipo de Crédito</label>
  <select name="credit_type_id" class="form-control" required>
    <?php foreach ($credit_types as $type): ?>
      <option value="<?= $type['id']; ?>"><?= $type['name']; ?></option>
    <?php endforeach; ?>
  </select>
</div>

<div class="form-group">
  <label>Valor Líquido</label>
  <input type="number" step="0.01" name="net_value" class="form-control" required>
</div>

<button type="submit" class="btn btn-success">Salvar Proposta</button>
<?php echo form_close(); ?>

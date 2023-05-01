<?php $__env->startSection('title', 'Criar Evento'); ?>

<?php $__env->startSection('content'); ?>

<div div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="image">Imagem do Evento:</label>
        <input type="file" id="image" name="image" class="from-control-file">
    </div>
    <div class="form-group">
      <label for="title">Evento:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
    </div>
    <div class="form-group">
      <label for="date">Data do Evento:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
    </div>
    <div class="form-group">
      <label for="title">O evento é privado?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
    </div>
    <div class="form-group">
      <label for="title">Adicione Itens de Infraestrutura:</label>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Cadiras"> Cadeiras
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Palco"> Palco
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Cerveja gratis"> Cerveja grátis
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Open Food"> Open food
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Brindes"> Brindes
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/neemias/Área de Trabalho/cusros/hdcevents/resources/views/events/create.blade.php ENDPATH**/ ?>
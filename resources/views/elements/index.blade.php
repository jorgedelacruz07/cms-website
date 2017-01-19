<a class="uk-button uk-button-primary" href="#createModalText<?= $page->id ?>" data-uk-modal="">CREAR TEXTO</a>
<a class="uk-button uk-button-primary" href="#createModalImage<?= $page->id ?>" data-uk-modal="">CREAR IMAGEN</a>

<div class="uk-margin-large-top">
  <table class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
    <thead>
      <tr class="uk-grid-width-1-4">
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Contenido</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($elements as $element): ?>
        <?php if ($element->type == "text"): ?>
          <tr class="uk-grid-width-1-4">
            <td><?= $element->text->title ?></td>
            <td class="uk-text-uppercase"><?= $element->type ?></td>
            <td>
              <a class="uk-button uk-button-primary" href="#viewModalText<?= $element->id ?>" data-uk-modal="{center:true}">Ver contenido</a>
              <div id="viewModalText<?= $element->id ?>" class="uk-modal">
                <div class="uk-modal-dialog">
                  <a href="" class="uk-modal-close uk-close"></a>
                  <p>
                    <?= $element->text->content ?>
                  </p>
                </div>
              </div>
            </td>
            <td>
              <a class="uk-button uk-button-danger" href="#editModalText<?= $element->id ?>" data-uk-modal="">Editar</a>
              <div id="editModalText<?= $element->id ?>" class="uk-modal">
                <div class="uk-modal-dialog">
                  <a href="" class="uk-modal-close uk-close"></a>
                  <p>
                    <div class="uk-container uk-container-center">
                      <h3 class="uk-text-center">EDITAR TEXTO</h3>
                      {!! Form::open(['action' => ['TextsController@update', $website->id, $page->id, $element->text->id], 'method' => 'post', 'id' => 'form-contacto', 'class' => 'uk-form uk-position-relative']) !!}
                        {!! Form::token() !!}
                        <div class="uk-form-row">
                          <input name="title" type="text" class="uk-width-1-1 uk-form-large" placeholder="Título" value="<?= $element->text->title ?>" required="">
                        </div>
                        <div class="uk-form-row">
                          <textarea name="content" class="uk-width-1-1 uk-form-large" rows="3" placeholder="Escribir contenido" cols="40" required=""><?= $element->text->content ?></textarea>
                        </div>
                        <div class="uk-form-row uk-text-center">
                          <button class="uk-button uk-button-large">ENVIAR</button>
                        </div>
                      {!! Form::close() !!}
                    </div>
                  </p>
                </div>
              </div>
            </td>
          </tr>
        <?php else: ?>
          <tr class="uk-grid-width-1-4">
            <td><?= $element->image->name ?></td>
            <td class="uk-text-uppercase"><?= $element->type ?></td>
            <td>
              <a class="uk-button uk-button-primary" href="#viewModalImage<?= $element->id ?>" data-uk-modal="">Ver foto</a>
              <div id="viewModalImage<?= $element->id ?>" class="uk-modal">
                <div class="uk-modal-dialog">
                  <a href="" class="uk-modal-close uk-close"></a>
                  <p>
                    <img src="<?= $element->image->url ?>" alt="" />
                  </p>
                </div>
              </div>
            </td>
            <td>
              <a class="uk-button uk-button-danger" href="#editModalImage<?= $element->id ?>" data-uk-modal="">Editar</a>
              <div id="editModalImage<?= $element->id ?>" class="uk-modal">
                <div class="uk-modal-dialog">
                  <a href="" class="uk-modal-close uk-close"></a>
                  <p>
                    <div class="uk-container uk-container-center">
                      <h3 class="uk-text-center">EDITAR IMAGEN</h3>
                      {!! Form::open(['action' => ['ImagesController@update', $website->id, $page->id, $element->image->id], 'files' => 'true', 'method' => 'post', 'id' => 'form-contacto', 'class' => 'uk-form uk-position-relative']) !!}
                        {!! Form::token() !!}
                        <div class="uk-form-row">
                          <input name="name" type="text" class="uk-width-1-1 uk-form-large" placeholder="Nombre" value="<?= $element->image->name ?>" required="">
                        </div>
                        <div class="uk-form-row">
                          <input name="url" type="file" class="uk-width-1-1 uk-form-large" required="">
                        </div>
                        <div class="uk-form-row uk-text-center">
                          <button class="uk-button uk-button-large">ENVIAR</button>
                        </div>
                        <div class="form-loader uk-hidden bg-white-transparent uk-position-cover uk-flex uk-flex-center uk-flex-middle">
                          <div class="uk-text-muted uk-text-center uk-heading-large">
                            <i class="uk-icon-spinner uk-icon-spin"></i>
                          </div>
                        </div>
                      {!! Form::close() !!}
                    </div>
                  </p>
                </div>
              </div>
            </td>
          </tr>
        <?php endif; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<div id="createModalText<?= $page->id ?>" class="uk-modal">
  <div class="uk-modal-dialog">
    <a href="" class="uk-modal-close uk-close"></a>
    <p>
      <div class="uk-container uk-container-center">
        <h3 class="uk-text-center">CREAR TEXTO</h3>
        {!! Form::open(['action' => ['TextsController@store', $website->id, $page->id], 'method' => 'post', 'id' => 'form-contacto', 'class' => 'uk-form uk-position-relative']) !!}
          {!! Form::token(); !!}
          <input type="hidden" name="type" value="text">
          <div class="uk-form-row">
            <input name="name" type="text" class="uk-width-1-1 uk-form-large" placeholder="Nombre del elemento" required="">
          </div>
          <div class="uk-form-row">
            <input name="title" type="text" class="uk-width-1-1 uk-form-large" placeholder="Título" required="">
          </div>
          <div class="uk-form-row">
            <textarea name="content" class="uk-width-1-1 uk-form-large" rows="3" placeholder="Escribir texto" cols="40" required=""></textarea>
          </div>
          <div class="uk-form-row uk-text-center">
            <button class="uk-button uk-button-large">ENVIAR</button>
          </div>
          <div class="form-loader uk-hidden bg-white-transparent uk-position-cover uk-flex uk-flex-center uk-flex-middle">
            <div class="uk-text-muted uk-text-center uk-heading-large">
              <i class="uk-icon-spinner uk-icon-spin"></i>
            </div>
          </div>
        {!! Form::close() !!}
      </div>
    </p>
  </div>
</div>

<div id="createModalImage<?= $page->id ?>" class="uk-modal">
  <div class="uk-modal-dialog">
    <a href="" class="uk-modal-close uk-close"></a>
    <p>
      <div class="uk-container uk-container-center">
        <h3 class="uk-text-center">CREAR IMAGEN</h3>
        {!! Form::open(['action' => ['ImagesController@store', $website->id, $page->id], 'files' => 'true', 'method' => 'post', 'id' => 'form-contacto', 'class' => 'uk-form uk-position-relative']) !!}
          {!! Form::token(); !!}
          <input type="hidden" name="type" value="image">
          <div class="uk-form-row">
            <input name="title" type="text" class="uk-width-1-1 uk-form-large" placeholder="Título del elemento" required="">
          </div>
          <div class="uk-form-row">
            <input name="name" type="text" class="uk-width-1-1 uk-form-large" placeholder="Nombre" required="">
          </div>
          <div class="uk-form-row">
            <input name="url" type="file" class="uk-width-1-1 uk-form-large" required="">
          </div>
          <div class="uk-form-row uk-text-center">
            <button class="uk-button uk-button-large">ENVIAR</button>
          </div>
          <div class="form-loader uk-hidden bg-white-transparent uk-position-cover uk-flex uk-flex-center uk-flex-middle">
            <div class="uk-text-muted uk-text-center uk-heading-large">
              <i class="uk-icon-spinner uk-icon-spin"></i>
            </div>
          </div>
        {!! Form::close() !!}
      </div>
    </p>
  </div>
</div>

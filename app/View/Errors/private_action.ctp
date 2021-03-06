<?php
/**
 * @var $this HintView
 *
 * @var $controller
 * @var $action
 */
?>
<div class="red">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card-panel white">
                    <h2 class="red-text">Private Method in <?=h($controller)?></h2>
                    <p><strong>Error:</strong> <em><?=h($controller . '::' . $action . '()')?></em> cannot be accessed directly.</p>
                    <?php
                    echo $this->element('exception_stack_trace');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


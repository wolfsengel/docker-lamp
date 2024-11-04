<?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php elseif ($success): ?>
                        <div class="alert alert-success">La tarea se ha guardado correctamente.</div>
                    <?php endif; ?>
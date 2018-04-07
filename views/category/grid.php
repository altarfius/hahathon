<div class="row menu-list">
    <?php foreach ($categories as $category): ?>
        <div class="col s3" style="background-color: <?= '#'. $category->color; ?>">
            <div class="menu-list__item">
                <a class="menu-list__item-link" href="<?= $category->url; ?>">
                    <div class="menu-item__icon">
                        <svg id="Layer_1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g>
                                <path d="M23,8c-1-2-2.6-4-5-4c-1.1,0-2,0.3-2.8,0.9C15.2,5,14,4,12,4c0-1.7,1-3,3-3V0c-3,0-4,1.8-4,4v0.1C9,4.3,8.8,4.9,8.8,4.9   C8,4.3,7.1,4,6,4C3.6,4,2,6,1,8c0,0-1,2-1,6c0,2.1,0.3,4.1,0.9,6c0,0,1,4,5.1,4c1.1,0,2-0.3,2.8-0.9c0,0,0,0-0.1,0   c0.9,0.6,2,0.9,3.2,0.9s2.3-0.3,3.2-0.9c0,0,0,0-0.1,0C16,23.7,16.9,24,18,24c4,0,5.1-4,5.1-4c0.6-1.9,0.9-3.9,0.9-6   C24,10,23,8,23,8z M20.8,20c-0.4,1.2-1.5,2-2.8,2c-1.5,0-2.9-1.5-2.9-1.5C14.4,21.4,13.3,22,12,22s-2.4-0.6-3.1-1.5   c0,0-1.4,1.5-2.9,1.5c-2,0-3-2.1-3-2.1C2.4,18,2,17,2,14s0.4-3.6,1-5.5C3,8.5,4,6,6,6c0.5,0,0.9,0.1,1.3,0.3c0,0-1,1.7-1.2,2.7h2.1   c0.4-1.7,2-3,3.9-3s3.4,1.3,3.9,3h2.1c-0.2-1-1.2-2.7-1.2-2.7C17.1,6.1,17.5,6,18,6c2,0,3,2.5,3,2.5c0.6,1.8,1,2.5,1,5.5   S20.8,20,20.8,20z"></path>
                                <path d="M12,7v1c1.1,0,2,0.9,2,2h1C15,8.3,13.7,7,12,7z"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="row">
                        <div class="col s7">
                            <div class="menu-item__title"><?= $category->name; ?></div>
                        </div>
                        <div class="col s5">
                            <div class="menu-item__count"><?= $category->menuItemsCount; ?></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
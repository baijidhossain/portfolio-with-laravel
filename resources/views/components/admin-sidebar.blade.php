    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

      <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">



          <?php




          $menu_array = [
            [
              'id' => 1,
              'name' => 'Dashboard',
              'parent_id' => 0,
              "url" => "index.html"
            ],
            [
              'id' => 2,
              'name' => 'Directorssss',
              'parent_id' => 0,
              "url" => "javascript:void(0)"
            ],
            [
              'id' => 3,
              'name' => 'New Director',
              'parent_id' => 2,
              "url" => "new-director.html"
            ],
            [
              'id' => 4,
              'name' => 'Director List',
              'parent_id' => 2,
              "url" => "board-of-directors.html"
            ],
            [
              'id' => 5,
              'name' => 'Members',
              'parent_id' => 0,
              "url" => "javascript:void(0)"
            ],
            [
              'id' => 6,
              'name' => 'New Member',
              'parent_id' => 5,
              "url" => "new-member.html"
            ],
            [
              'id' => 7,
              'name' => 'Member List',
              'parent_id' => 5,
              "url" => "members.html"
            ],
            [
              'id' => 8,
              'name' => 'Member List',
              'parent_id' => 7,
              "url" => "members.html"
            ],
            [
              'id' => 9,
              'name' => 'Member List',
              'parent_id' => 7,
              "url" => "members.html"
            ],
            [
              'id' => 10,
              'name' => 'Member List1',
              'parent_id' => 9,
              "url" => "members.html"
            ],
            [
              'id' => 11,
              'name' => 'Member List2',
              'parent_id' => 9,
              "url" => "members.html"
            ],
          ];


          function renderMenu($items, $parent_id = 0, $level = 0)
          {
            $has_child = false;
            $side_menu = "";
            if ($level == 0) {

              $side_menu = "id='side-menu'";
            }

            foreach ($items as $item) {
              if ($item['parent_id'] == $parent_id) {
                if ($has_child === false) {
                  $has_child = true;
                  echo '<ul ' . $side_menu . ' class="' . getUlClass($level) . '">';
                }

                $has_children = hasChildren($items, $item['id']);

                if ($item['url'] == 'divider') {
                  echo '<li class="side-item side-item-category">' . $item['name'] . '</li>';
                } else {
                  echo '<li class="' . getLiClass($level) . '">';

                  echo '<a class=" ' . ($has_children ? 'has-arrow' : '') . '" href="' . ($has_children ? 'javascript:void(0);' : $item['url']) . '"' . ($has_children ? ' data-bs-toggle="' . getDataBsToggle($level) . '"' : '') . '>';

                  if ($level == 0) {
                    echo '<i class="fa fa-home fs-5"></i>';
                  }

                  echo '<span class="' . getLabelClass($level) . '">' . $item['name'] . '</span>';

                  echo '</a>';
                  if ($has_children) {
                    renderMenu($items, $item['id'], $level + 1);
                  }
                  echo '</li>';
                }
              }
            }
            if ($has_child === true) {
              echo '</ul>';
            }
          }

          function hasChildren($items, $id)
          {
            foreach ($items as $item) {
              if ($item['parent_id'] == $id) {
                return true;
              }
            }
            return false;
          }

          function getUlClass($level)
          {
            switch ($level) {
              case 0:
                return 'metismenu list-unstyled';
              case 1:
                return 'sub-menu mm-collapse';
              case 2:
                return 'sub-slide-menu';
              case 3:
                return 'sub-slide-menu2';
              case 4:
                return 'sub-slide-menu3';
              default:
                return 'sub-slide-menu' . $level;
            }
          }

          function getLiClass($level)
          {
            switch ($level) {
              case 0:
                return 'liclass';
              case 1:
                return 'sub-slide1';
              case 2:
                return 'sub-slide2';
              case 3:
                return 'sub-slide-item2';
              case 4:
                return 'sub-slide-item3';
              default:
                return 'sub-slide' . $level;
            }
          }

          function getItemClass($level)
          {
            switch ($level) {
              case 0:
                return 'side-menu__item';
              case 1:
                return 'sub-side-menu__item';
              default:
                return 'sub-slide-item' . $level;
            }
          }

          function getLabelClass($level)
          {
            switch ($level) {
              case 0:
                return 'side-menu__label';
              case 1:
                return 'sub-side-menu__label';
              default:
                return 'sub-side-menu__label' . $level;
            }
          }

          function getAngleIconClass($level)
          {
            switch ($level) {
              case 0:
                return 'angle fa-solid fa-angle-right';
              case 1:
                return 'sub-angle fa-solid fa-angle-right';
              default:
                return 'sub-angle' . $level . ' fa-solid fa-angle-right';
            }
          }

          function getDataBsToggle($level)
          {
            switch ($level) {
              case 0:
                return 'slide';
              case 1:
                return 'sub-slide';
              default:
                return 'sub-slide' . $level;
            }
          }

          renderMenu($menu_array);

          ?>



        </div>
        <!-- Sidebar -->
      </div>
    </div>
    <!-- Left Sidebar End -->
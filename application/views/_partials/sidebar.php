<?php
?>
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" data-img="<?php echo base_url();?>app-assets/images/backgrounds/04.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row position-relative">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo base_url();?>index.html"><img class="brand-logo" alt="Chameleon admin logo" src="<?php echo base_url();?>app-assets/images/logo/logo.png"/>
              <h3 class="brand-text">Chameleon</h3></a></li>
          <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-disc font-medium-3" data-ticon="ft-disc"></i></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="<?php echo base_url();?>index.html"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
            <ul class="menu-content">
              <li class="active"><a class="menu-item" href="<?php echo base_url();?>dashboard-ecommerce.html">eCommerce</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>dashboard-analytics.html">Analytics</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url();?>#"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Apps</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="<?php echo base_url();?>email-application.html">Email Application</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>chat-application.html">Chat Application</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>full-calender.html">Full Calendar</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>project-summary.html">Project Summary</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>invoice-template.html">Invoice</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>#">Timelines</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>timeline-center.html">Timelines Center</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>timeline-horizontal.html">Timelines Horizontal</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>user-profile.html">Users Profile</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>users-contacts.html">Contact List</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url();?>#"><i class="ft-monitor"></i><span class="menu-title" data-i18n="">Templates</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="<?php echo base_url();?>#">Vertical</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>../vertical-menu-template">Classic Menu</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>../vertical-modern-menu-template">Modern Menu</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>#">Horizontal</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>../horizontal-menu-template-nav">Full Width</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url();?>#"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Layouts</span><span class="badge badge badge-pill badge-danger float-right mr-2">5</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="<?php echo base_url();?>#">Content Sidebar</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>layout-content-detached-left-sidebar.html">Left sidebar</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>layout-content-detached-left-sticky-sidebar.html">Sticky left sidebar</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>layout-content-detached-right-sidebar.html">Right sidebar</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>layout-content-detached-right-sticky-sidebar.html">Sticky right sidebar</a>
                  </li>
                </ul>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="<?php echo base_url();?>navbar-hide-on-scroll-top.html">Hide on Scroll Top</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>layout-fixed-navbar.html">Fixed navbar</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>layout-fixed-navigation.html">Fixed navigation</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>layout-fixed-navbar-navigation.html">Fixed navbar &amp; navigation</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>layout-fixed-navbar-footer.html">Fixed navbar &amp; footer</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="<?php echo base_url();?>layout-fixed.html">Fixed layout</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>layout-boxed.html">Boxed layout</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>layout-static.html">Static layout</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="<?php echo base_url();?>layout-light.html">Navigation light</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>layout-dark.html">Navigation Dark</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>vertical-nav-flipped.html">Flipped Navigation</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url();?>#"><i class="ft-zap"></i><span class="menu-title" data-i18n="">Starter kit</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="<?php echo base_url();?>#">Content sidebar</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>starter-kit/ltr/vertical-modern-menu-template/layout-content-detached-left-sidebar.html">Left sidebar</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>starter-kit/ltr/vertical-modern-menu-template/layout-content-detached-left-sticky-sidebar.html">Sticky left sidebar</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>starter-kit/ltr/vertical-modern-menu-template/layout-content-detached-right-sidebar.html">Right sidebar</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>starter-kit/ltr/vertical-modern-menu-template/layout-content-detached-right-sticky-sidebar.html">Sticky right sidebar</a>
                  </li>
                </ul>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="<?php echo base_url();?>starter-kit/ltr/vertical-modern-menu-template/layout-fixed-navbar.html">Fixed navbar</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>starter-kit/ltr/vertical-modern-menu-template/layout-fixed-navigation.html">Fixed navigation</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>starter-kit/ltr/vertical-modern-menu-template/layout-fixed-navbar-navigation.html">Fixed navbar &amp; navigation</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>starter-kit/ltr/vertical-modern-menu-template/layout-fixed-navbar-footer.html">Fixed navbar &amp; footer</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="<?php echo base_url();?>starter-kit/ltr/vertical-modern-menu-template/layout-fixed.html">Fixed layout</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>starter-kit/ltr/vertical-modern-menu-template/layout-boxed.html">Boxed layout</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>starter-kit/ltr/vertical-modern-menu-template/layout-static.html">Static layout</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="<?php echo base_url();?>starter-kit/ltr/vertical-modern-menu-template/layout-light.html">Navigation Light</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>starter-kit/ltr/vertical-modern-menu-template/layout-dark.html">Navigation Dark</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url();?>#"><i class="ft-aperture"></i><span class="menu-title" data-i18n="">User Interface</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="<?php echo base_url();?>#">Content</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>content-grid.html">Grid</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>content-typography.html">Typography</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>content-text-utilities.html">Text utilities</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>content-syntax-highlighter.html">Syntax highlighter</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>content-helper-classes.html">Helper classes</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>#">Color Palette</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>color-palette-primary.html">Primary palette</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>color-palette-danger.html">Danger palette</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>color-palette-success.html">Success palette</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>color-palette-warning.html">Warning palette</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>color-palette-info.html">Info palette</a>
                  </li>
                  <li class="navigation-divider"></li>
                  <li><a class="menu-item" href="<?php echo base_url();?>color-palette-red.html">Red palette</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>color-palette-pink.html">Pink palette</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>color-palette-purple.html">Purple palette</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>color-palette-blue.html">Blue palette</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>color-palette-cyan.html">Cyan palette</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>color-palette-teal.html">Teal palette</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>color-palette-yellow.html">Yellow palette</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>color-palette-amber.html">Amber palette</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>color-palette-blue-grey.html">Blue Grey palette</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>card-bootstrap.html">Bootstrap Cards</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>card-advanced.html">Advanced Cards</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>#">Icons</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>icons-feather.html">Feather</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>icons-line-awesome.html">Line Awesome</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>icons-simple-line-icons.html">Simple Line Icons</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>animation.html">Animation</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url();?>#"><i class="ft-box"></i><span class="menu-title" data-i18n="">Components</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="<?php echo base_url();?>#">Bootstrap</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>component-alerts.html">Alerts</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>component-buttons.html">Buttons</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>component-carousel.html">Carousel</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>component-collapse.html">Collapse</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>component-dropdowns.html">Dropdowns</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>component-list-group.html">List Group</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>component-modals.html">Modals</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>component-pagination.html">Pagination</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>component-navs-component.html">Navs</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>component-tabs-component.html">Tabs</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>component-pills-component.html">Pills</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>component-tooltips.html">Tooltips</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>component-popovers.html">Popovers</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>component-badges.html">Badges</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>component-pill-badges.html">Pill Badges</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>component-progress.html">Progress</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>component-media-objects.html">Media Objects</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>#">Extra</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>ex-component-sweet-alerts.html">Sweet Alerts</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>ex-component-toastr.html">Toastr</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>ex-component-ratings.html">Ratings</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>ex-component-tour.html">Tour</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>#">Editors</a>
                    <ul class="menu-content">
                      <li><a class="menu-item" href="<?php echo base_url();?>editor-ckeditor.html">CKEditor</a>
                      </li>
                      <li><a class="menu-item" href="<?php echo base_url();?>editor-tinymce.html">TinyMCE</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>pickers-date-&amp;-time-picker.html">Date &amp; Time Picker</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>block-ui.html">Block UI</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>file-uploader-dropzone.html">File Uploader</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url();?>#"><i class="ft-edit"></i><span class="menu-title" data-i18n="">Forms</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="<?php echo base_url();?>#">Form Elements</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>form-inputs.html">Form Inputs</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>form-switch.html">Switch</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>form-select2.html">Select2</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>form-checkboxes-radios.html">Checkboxes &amp; Radios</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>form-tags-input.html">Tags Input</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>form-validation.html">Validation</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>form-extended-inputs.html">Extended Inputs</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>#">Form Layouts</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>form-layout-basic.html">Basic Forms</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>form-layout-horizontal.html">Horizontal Forms</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>form-layout-hidden-labels.html">Hidden Labels</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>form-wizard.html">Form Wizard</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>form-repeater.html">Form Repeater</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url();?>#"><i class="ft-grid"></i><span class="menu-title" data-i18n="">Tables</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="<?php echo base_url();?>table-bootstrap.html">Bootstrap Tables</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>#">DataTables</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>dt-basic-initialization.html">Basic Initialisation</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>dt-styling.html">Styling</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>dt-data-sources.html">Data Sources</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>dt-advanced-initialization.html">Advanced initialisation</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>dt-api.html">API</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url();?>#"><i class="ft-bar-chart-2"></i><span class="menu-title" data-i18n="">Charts</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="<?php echo base_url();?>chartist-charts.html">Chartist</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>chartjs-charts.html">Chartjs</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>#">Maps</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>google-maps.html">Google Maps</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>jvector-maps.html">jVector Map</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url();?>#"><i class="ft-sidebar"></i><span class="menu-title" data-i18n="">Pages</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="<?php echo base_url();?>gallery-grid.html">Gallery</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>search.html">Search</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>#">Authentication</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>login.html">Login</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>register.html">Register</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>unlock-user.html">Unlock User</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>recover-password.html">Recover password</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>#">Error</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>error-400.html">Error 400</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>error-401.html">Error 401</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>error-403.html">Error 403</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>error-404.html">Error 404</a>
                  </li>
                  <li><a class="menu-item" href="<?php echo base_url();?>error-500.html">Error 500</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>coming-soon.html">Coming Soon</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>under-maintenance.html">Maintenance</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url();?>changelog.html"><i class="ft-file"></i><span class="menu-title" data-i18n="">Changelog</span><span class="badge badge badge-pill badge-warning float-right">1.0</span></a>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url();?>#"><i class="ft-server"></i><span class="menu-title" data-i18n="">Menu levels</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="<?php echo base_url();?>#">Second level</a>
              </li>
              <li><a class="menu-item" href="<?php echo base_url();?>#">Second level child</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?php echo base_url();?>#">Third level</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url();?>https://themeselection.com/support"><i class="ft-life-buoy"></i><span class="menu-title" data-i18n="">Raise Support</span></a>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url();?>https://themeselection.com/demo/chameleon-admin-template/documentation"><i class="ft-book"></i><span class="menu-title" data-i18n="">Documentation</span></a>
          </li>
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>
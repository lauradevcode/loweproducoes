import _ from "lodash";
import '@fortawesome/fontawesome-free/js/all.js';
import '@fortawesome/fontawesome-free/css/all.css';
import '../css/app.css';
import 'flowbite';
import jQuery from 'jquery';
import {directive} from '@wireui/alpinejs-hold-directive'
import 'simplebar';
import 'simplebar/dist/simplebar.css';
import swal from 'sweetalert2';
import '@sweetalert2/theme-default/default.min.css';
import 'vide/dist/jquery.vide.min.js';
import {Alpine, Livewire} from '../../vendor/livewire/livewire/dist/livewire.esm';

window._ = _;

window.$ = window.jQuery = jQuery;
window.swal = window.Swal = swal;
Alpine.directive('hold', directive)

Livewire.start();

import.meta.glob(['../images/**', '../favicon/**']);

require('alpinejs');

require('./bootstrap');

import { createApp } from 'vue'

import ModalProfileEdit from './components/ModalProfileEdit.vue';
import SocialLink from './components/SocialLink.vue';
import FileUploader from './components/FileUploader.vue';
import FlashMessage from './components/FlashMessage.vue';

const app = createApp({});

app.component('modal-profile-edit', ModalProfileEdit)
    .component('social-link', SocialLink)
    .component('file-uploader', FileUploader)
    .component('flash-message', FlashMessage)
    .mount('#app');
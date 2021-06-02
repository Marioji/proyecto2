require('./bootstrap');

require('alpinejs');
import ExampleComponent from  './components/ExampleComponent';


import { createApp } from 'vue'

createApp({

    components: {
        ExampleComponent,
    }


}).mount('#app');

Nova.booting((Vue, router) => {
    Vue.component('index-nova-unique-ajax-field', require('./components/IndexField'));
    Vue.component('detail-nova-unique-ajax-field', require('./components/DetailField'));
    Vue.component('form-nova-unique-ajax-field', require('./components/FormField'));
})

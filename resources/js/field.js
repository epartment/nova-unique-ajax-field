Nova.booting((Vue, router) => {
    Vue.component('index-nova-unique-field', require('./components/IndexField'));
    Vue.component('detail-nova-unique-field', require('./components/DetailField'));
    Vue.component('form-nova-unique-field', require('./components/FormField'));
})

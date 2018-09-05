Vue.component('pro_commerce-fieldtype', {

    mixins: [Fieldtype],

    template: {

		

	},

    data: function() {
        return {
             show: false
        };
    },

    computed: {
		inputType: function() {
            return this.show ? 'text' : 'password';
        }
    },

    methods: {
        //
    },

    ready: function() {
        //
    }

});

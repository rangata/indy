<template>
    <div class="container">
        <h3>Persons</h3>
    <vue-good-table :columns="columns" :rows="rows" :search-options="{ enabled: true}">
    </vue-good-table>
    </div>

</template>

<script>

    import {VueGoodTable} from 'vue-good-table';

    export default {
        name: "PersonIndexComponent",
        components: {
          VueGoodTable
        },
        props: ['persons'],
        data() {
            return {
                emplo: [],
                columns: [
                    {
                      label: 'Име',
                      field: 'name'
                    },
                    {
                      label: 'Фамилия',
                      field: 'lastname'
                    },
                    {
                      label: 'Телефон',
                      field: 'phone'
                    },
                    {
                      label: 'Ел. поща',
                      field: 'email',
                        type: 'email'
                    },
                    {
                        label: 'Действия',
                        field: this.actions,
                        html: true
                    }
                ],
                rows: this.$props.persons
            }
        },
        mounted() {
            this.$props.persons.forEach(person => {
                this.emplo.push(person)
            })
        },
        methods: {
            actions() {
                return '<button class="btn btn primary">++</button>'
            }
        }
    }
</script>

<style scoped>

</style>
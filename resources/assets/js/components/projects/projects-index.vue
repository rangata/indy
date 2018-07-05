<template>
    <b-container fluid>
        <vue-good-table
                :columns="columns"
                :rows="rows"
                theme="black-rhino"
                :lineNumbers="true"
        >

        </vue-good-table>
    </b-container>
</template>

<script>
    import {VueGoodTable} from 'vue-good-table';
    import Datepicker from 'vuejs-datepicker';

    export default {
        name: "projects-index",
        props: ['projects'],
        components: {
            VueGoodTable,
            Datepicker
        },
        data() {
            return {
                projectsData: [],
                columns: [
                    {
                        label: 'Наименование на проекта',
                        filterable: true,
                        filterOptions: { enabled: true},
                        field: 'title'
                    },
                    {
                        label: 'Локация',
                        filterable: true,
                        filterOptions: { enabled: true},
                        field: 'location'
                    },
                    {
                        label: 'Отговорник на проекта',
                        filterable: true,
                        filterOptions: { enabled: true},
                        field: 'personInCharge'
                    },
                    {
                        label: 'Начало на проекта',
                        field: 'startFrom',
                        type: 'date',
                        filterOptions: { enabled: true},
                        dateInputFormat: 'YYYY-MM-DD',
                        dateOutputFormat: 'DD.MM.YYYY',
                    },
                    {
                        label: 'Краен срок за изпълнение',
                        field: 'ending',
                        type: 'date',
                        filterOptions: { enabled: true},
                        dateInputFormat: 'YYYY-MM-DD',
                        dateOutputFormat: 'DD.MM.YYYY',
                    },
                    {
                        label: '',
                        field: this.actionFields,
                        html: true
                    }

                ],
                rows: this.$props.projects,
            }
        },
        mounted() {
            this.projectsData = this.$props.projects
            console.log(this.$props.projects);
        },
        methods: {
            actionFields(value) {
                return '<div class="btn-group">' +
                        '<a href=/projects/' + value.id + ' class="btn btn-primary"><i class="fa fa-eye"></i>' + ' Повече' +'</a>'+
                        '<a href=/projects/' + value.id + ' class="btn btn-success"><i class="fa fa-pen"></i>' + ' Редакция' +'</a>'+
                        '<a href=/projects/' + value.id + ' class="btn btn-danger"><i class="fa fa-minus"></i>' + ' Изтрий' +'</a>'
                    '</div>'
            }
        }
    }
</script>

<style scoped>

</style>
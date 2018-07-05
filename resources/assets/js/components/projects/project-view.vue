<template>
    <b-container fluid>
        {{ singleProject.startFrom | moment("DD.MM.Y") }} -
        {{ singleProject.ending | moment("DD.MM.Y") }}
        <span>{{ singleProject.startFrom | moment("from", "now", true) }}</span>
        <b-container fluid>
            <b-container>
                Прогрес: <b-progress :value="25" variant="success" striped class="mb-2"></b-progress>
            </b-container>
            <b-card bg-variant="primary" header-tag="header" text-variant="white">
                <div slot="header" id="header">
                    <h1><i class="fa fa-industry"></i> {{ singleProject.title}} {{ singleProject.location }}</h1>
                </div>
                <h3>
                    <i class="fa fa-user"></i>
                    Ръководител на проекта:
                    {{ singleProject.personInCharge}}
                </h3>
            </b-card>

        </b-container>
        <br>
       <b-container fluid>
           <b-card bg-variant="azure" header-tag="header" text-variant="black" footer-tag="foot-tag" no-body>
               <div slot="header">
                   <h1><i class="fa fa-people-carry"></i> Екип</h1>
               </div>
             <b-card-body>
                 <b-row>
                     <div v-for="person in singleProject.persons">
                         <b-col>
                              <span v-if="person.lastname === 'Райчев'">
                              <b-img rounded="circle" src="http://www.vestnikataka.bg/wp-content/uploads/2012/07/%D0%B1%D0%BE%D0%B9%D0%BA%D0%BE-%D0%BC%D1%83%D1%82%D1%80%D0%B0.jpg"  width="175" height="175" blank-color="#777" alt="img" class="m-1" />
                             </span>
                             <div class="img" v-else>
                                 <b-img rounded="circle" blank width="175" height="175" blank-color="#777" alt="img" class="m-1" />
                             </div>
                             <div>
                                 <span>
                                     {{ person.name }} {{ person.lastname}}
                                 </span>

                             </div>
                         </b-col>
                     </div>
                     <!--<b-col>-->
                         <!--<b-img thumbnail rounded="circle" src="https://picsum.photos/250/250/?image=54" alt="Thumbnail" />-->
                         <!--<div class="img-title">{{ singleProject.persons }}</div>-->
                     <!--</b-col>-->
                     <!--<b-col>-->
                         <!--<b-img thumbnail rounded="circle" src="https://picsum.photos/250/250/?image=58" alt="Thumbnail" />-->
                     <!--</b-col>-->
                     <!--<b-col>-->
                         <!--<b-img thumbnail rounded="circle" src="https://picsum.photos/250/250/?image=59" alt="Thumbnail" />-->
                               <!--</b-col>-->
                 </b-row>

             </b-card-body>
               <b-card-footer>
                   <button class="btn btn-lg btn-success btn-block"><i class="fa fa-plus"></i> Добави </button>
               </b-card-footer>
           </b-card>
       </b-container>
        <br>
        <b-container fluid>
            <b-card
                    no-body
            >
                <div slot="header">
                    <h1>
                        <i class="fa fa-cogs"></i> Техника и апаратура
                    </h1>
                </div>

                <b-card-body>
                    <div class="da">
                        <vue-good-table :columns="columns" :rows="rows"></vue-good-table>
                    </div>
                </b-card-body>
                <b-card-footer>
                    <button class="btn btn-lg btn-success btn-block"><i class="fa fa-plus"></i> Добави </button>
                </b-card-footer>
            </b-card>
        </b-container>

        <!--// note tab-->
        <b-container>
            <b-card bg-variant="success" no-body footer-tag="footer" header-tag="header">
                <div class="nqma" slot="header">
                    <h1>Бележки</h1>
                </div>
                <b-card-body>
                    <vue-good-table :rows="noterows" :columns="notecolumns"></vue-good-table>
                </b-card-body>
                <div class="fiki" slot="footer">
                    fiki
                </div>
            </b-card>
        </b-container>
    </b-container>
</template>

<script>

    export default {
        name: "project-view",
        props: ['project'],

        data() {
            return {
                singleProject: this.$props.project,
                columns: [
                    {
                        label: 'Описание',
                        field: 'title'
                    },
                    {
                        label: 'model',
                        field: 'model'
                    },
                    {
                        lable: 'Нает',
                        field: 'hireFrom'
                    },
                ],
                rows: this.$props.project.equipment,

                // note table definitions

                notecolumns: [
                    {
                        label: 'Bele',
                        field: 'be'
                    }
                ],
                noterows: []
            }
        },
        methods: {

        },
        mounted() {
            // console.log(this.$props.project)
        }
    }
</script>

<style scoped>

</style>
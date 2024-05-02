<template>
    <div>
        <form @submit.prevent="submit_form">
            Title
            <input type="text" v-model="fields.title" class="form-control">
            <p class="alert alert-danger" v-if="errors && errors.title">
                {{ errors.title[0] }}
            </p>
            <br>
            Comments
            <input type="textarea" v-model="fields.comment_text" class="form-control" row="10" col="30">
            <p class="alert alert-danger" v-if="errors && errors.comment_text">
                {{ errors.comment_text[0] }}
            </p>
            <br>
            Image
            <br>
            <input type="file" @change="select_file">
            <br>
            <input type="submit" class="btn btn-primary" :disabled="form_submitting" :value="form_submitting ? 'save comment' : 'saving comment'">
        </form>
    </div>
</template>
<script>
export default{
    data(){
        return{
            /* creamos un object con los campos que necesitaremos */
            fields:{
                'title':'',
                'comment_text':'',
                'image':null,
            },
            errors:{

            },
            form_submitting:false,
        }
    },
    methods:{
        select_file(event){
            this.fields.image = event.target.files[0];
        },
        submit_form(){

            this.form_submitting = true;
            // debemos crear el form data que ya lo vimos anteriormente solo que aca desde JS
            let fields = new FormData();
            for (let key in this.fields) {
                fields.append(key,this.fields[key]);
            }

        /*      axios.post('/api/comments',this.fields)
            .then(response => {
                // Una vez que guardo nuestros datos lo redireccionamos a /
                this.$router.push('/');
            });  */

            /* axios.post('/api/comments',this.fields)
            .then(response => {
                // Una vez que guardo nuestros datos lo redireccionamos a /
                this.$router.push('/');
                this.form_submitting=false;
            })
            .catch(error => {
                if(error.response.status === 422){
                    this.errors = error.response.data.errors;
                    this.form_submitting=false;
                }
            } ); */

            // para la imagen agregams solo fields el objeto creado para llevar los campos
            axios.post('/api/comments',fields)
            .then(response => {
                this.$swal('Comment save');
                // Una vez que guardo nuestros datos lo redireccionamos a /
                this.$router.push('/');
                this.form_submitting=false;
            })
            .catch(error => {
                this.$swal({icon:'error',title:'Error'});
                if(error.response.status === 422){
                    this.errors = error.response.data.errors;
                }
                this.form_submitting=false;
            });
        }
    }
}
</script>

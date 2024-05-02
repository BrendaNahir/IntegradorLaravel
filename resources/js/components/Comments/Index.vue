<template>
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Comment</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="comment in comments.data" :key="comment.id">
                    <td> {{ comment.id }} </td>
                    <td> {{ comment.title }} </td>
                    <td> {{ comment.comment_text.substring(0,30) }} </td>
                    <td> {{ comment.created_at }} </td>
                    <td>
                        <router-link class="btn" :to="{name:'comments.edit',params:{id:comment.id}}"><i class="far fa-edit"></i></router-link>
                        <button class="btn" @click="delete_comment(comment.id)">
                            <i class="fas fa-trash-alt" style="color:red"></i>
                        </button>

                    </td>
                </tr>

            </tbody>
        </table>
         <pagination :data="comments" @pagination-change-page="getResults"></pagination>
    </div>
</template>
<script>
export default {
    data(){
        return{
            // Our data object that holds the laravel paginator data
            comments:{},
        }
    },
    mounted() {
        this.getResults();

/*
        axios.get('/api/comments')

        .then(response => {
            this.comments = response.data.data;
        })
  */



    },
    methods:{
        getResults(page = 1) {
			axios.get('/api/comments?page=' + page)
				.then(response => {
					this.comments = response.data;
				});
		},
        delete_comment(commentId){

            this.$swal({
                title: 'Are you Sure?',
                text:'You won\'t be able to revert this',
                icon:'danger',
                showCancelButton:true,
                confirmButtonColor:'red',
                cancelButtonColor:'grey',
                confirmButtonText:'Yes, delete it'
            })
            .then((result)=>{
                if(result.value){
                    axios.delete('/api/comments/'+commentId)
                        .then(response => {
                            this.$swal({icon:'info',title:'Detele Successfully'});
                            this.getResults();
                        })
                        .catch(error =>{
                            this.$swal({icon:'error',title:'Error'});
                        });
                }
            })

        }
    }
}
</script>

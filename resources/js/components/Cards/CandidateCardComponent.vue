<template>
	<div class="card sticky-action">
		<div class="card-image waves-effect waves-block waves-light" style="height: 200px">
			<img class="activator" :src="candidate.img" style="height: 100%">
		</div>
		<div class="card-content">
			<span class="card-title activator grey-text text-darken-4">{{fullname}}<i class="material-icons right">more_vert</i></span>
			<p>Candidato a {{candidate.position}}</p>
		</div>
		<div class="card-action">
			<a :href="candidate.twitter" target="_blank">Twitter</a>
			<a :href="candidate.url" target="_blank">Sitio Web</a>
		</div>
		<div class="card-reveal">
			<span class="card-title grey-text text-darken-4">Candidato a {{candidate.position}}<i class="material-icons right">close</i></span>
			<p>{{candidate.description}}</p>
		</div>
	</div>
</template>

<script>
	export default {
		name: "CandidateCardComponent",
		props: ['candidate'],
		computed:{
			fullname(){
				return this.candidate.first_name + " " + this.candidate.last_name
			}
		}
	}
</script>

<style scoped>

</style>
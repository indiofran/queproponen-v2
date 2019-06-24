<template>

	<div class="card">
		<div class="card-image party-img" :style="'background-color:'+ color ">
			<img class="responsive-img" :src="img">
		</div>
		<div class="card-content">
			<span class="card-title">{{title}}</span>
			<p>{{description}}</p>
		</div>
		<div class="card-action">
			<router-link :to="{ name: 'Party', params: { id: partyid }}">Ver Propuestas</router-link>

		</div>
	</div>

</template>

<script>
	export default {
		name: "CardComponenet",
		props: ['partyid','img','title','description', 'color']
	}
</script>

<style scoped>
img{
	height: 100%;
	width: auto!important;
	margin: auto;
}
	.party-img{
		height:200px;
	}
</style>
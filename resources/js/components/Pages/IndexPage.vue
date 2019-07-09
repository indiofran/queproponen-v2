<!--Esto podria ser un posible index, pero no me termina de cerrar.-->
<template>
	<div>
		<div class="img-background">
			<div class="container">
				<div class="header valign-wrapper">
					<div class="header-text row">
						<div class="col s12">
							<h1>¿Qué Proponen?</h1>
							<p>Todas las propuestas y programas electorales de los Candidatos a Presidente de la Nación 2019.</p>
							<p>✔Informate</p>
							<p>✔Compara</p>
							<p>✔Decidí</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<h3 class="center">Propuestas</h3>
			<div v-for="category in categories">
				<h5> <i class="material-icons" style="vertical-align: bottom;">{{category.image}} </i> {{category.name}}</h5>
				<div class="divider"></div>
				<div class="col s12" v-for="proposal in category.proposals">
					<proposal-card-component :cardstyle="['card']" :background="proposal.party.color" :proposal="proposal"></proposal-card-component>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	import CardComponenet from "../Cards/CardComponenet";
	import ProposalCardComponent from "../Cards/ProposalCardComponent";
	export default {
		name: "IndexPage",
		components: {ProposalCardComponent, CardComponenet},
		data(){
			return {
				categories: [],
			}
		},
		mounted(){
			this.getPorposals()
		},
		methods:{
			getPorposals(){
				axios
					.get("/api/proposals")
					.then(res => {
						this.categories = res.data
						console.log(this.categories)
					})
			}
		}
	}
</script>

<style scoped>
	.header{
		min-height: 300px;
	}
	.header-text{
		display: block;
	}
	.img-background{
		background-color: #006c87;
		color:white;
	}
</style>
<template>
	<div>
		<div class="img-background">
			<div class="container">
				<div class="header valign-wrapper">
					<div class="header-text row">
						<div class="col s12">
							<h1>Que Proponen?</h1>
							<p>Enterate de las propuesta de cada partido para estas elecciones</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<h3 class="center">Partidos/Frentes Politicos</h3>
			<div class="col s12 m4 l3" v-for="party in parties">
				<card-componenet :title="party.name" :img="party.image" :description="party.description" :color="party.color" :partyid="party.id"></card-componenet>
			</div>
		</div>
	</div>
</template>

<script>
	import CardComponenet from "../Cards/CardComponenet";
	export default {
		name: "PartiesPages",
		components: {CardComponenet},
		mounted(){
			this.getParties()
		},
		data(){
			return {
				parties: [],
			}
		},
		methods:{
			getParties(){
				axios
					.get("/parties")
					.then(res => {
						this.parties = res.data
						console.log(this.parties);
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
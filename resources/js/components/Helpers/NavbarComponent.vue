<template>
	<nav>
		<div class="nav-wrapper">
			<router-link :to="{name: 'Index'}" class="brand-logo hide-on-small-only" v-if="$route.name != 'Index' ">Que Proponen</router-link>
			<ul class="right hide-on-med-and-up">
				<!-- Dropdown Trigger -->
				<li><a class='dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons">menu</i></a></li>
				<!-- Dropdown Structure -->
				<ul id='dropdown1' class='dropdown-content'>
					<li><router-link :to="{name:'What'}">¿Qué es?</router-link></li>
					<li><router-link :to="{name:'Team'}">¿Quiénes Somos?</router-link></li>
					<li><router-link :to="{name:'Padron'}">¿Dónde Voto?</router-link></li>
				</ul>
			</ul>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><router-link :to="{name:'What'}">¿Qué es?</router-link></li>
				<li><router-link :to="{name:'Team'}">¿Quiénes Somos?</router-link></li>
				<li><router-link :to="{name:'Padron'}">¿Dónde Voto?</router-link></li>
			</ul>
		</div>
	</nav>
</template>

<script>
	export default {
		name: "NavbarComponent",
		mounted(){
			let elems = document.querySelectorAll('.dropdown-trigger');
			let instances = this.$M.Dropdown.init(elems);
		}
	}
</script>

<style scoped>
.nav-wrapper{
	width: 90%;
	margin: auto;
}
</style>
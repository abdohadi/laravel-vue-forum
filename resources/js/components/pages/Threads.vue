<template>
	<div class="container">
		<h2>All Threads</h2>

		<div class="panel" v-for="thread in threads">
			<div class="panel-heading">
				<router-link :to="{ name: 'thread', params: { id: thread.id } }">{{ thread.title }}</router-link>
			</div>

			<div class="panel-body">
				{{ thread.body }}
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				threads: []
			}
		},
		created() {
			axios.get(getRoute('threads.index'))
				.then(response => {
					return response.data;
				})
				.then(data => {
					this.threads = data;
				});
		}
	}
</script>

<style>

</style>
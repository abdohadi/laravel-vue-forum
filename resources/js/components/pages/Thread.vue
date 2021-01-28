<template>
	<div class="container">
		<div class="panel">
			<div class="panel-heading">
				{{ thread.title }}
			</div>

			<div class="panel-body">
				{{ thread.body }}
			</div>
		</div>

		<reply v-for="reply in replies" :reply="reply"></reply>
	</div>
</template>

<script>
	import Reply from '../components/Reply';

	export default {
		props: ['id'],
		components: { Reply },
		data() {
			return {
				thread: {},
				replies: [],
			}
		},
		created() {
			axios.get(getRoute('threads.show', { thread: this.id }))
				.then(response => {
					return response.data;
				})
				.then(data => {
					this.thread = data.thread;
					this.replies = data.replies;
				});
		}
	}
</script>

function addFavorite(url, title) {
	try {
		window.external.addFavorite(url, title);
	} catch (e){
		try {
			window.sidebar.addPanel(title, url, '');
        	} catch (e) {
			alert("�밴 Ctrl+D ����ӵ��ղؼ�!");
		}
	}
}

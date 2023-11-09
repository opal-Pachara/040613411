<html>

<head>
    <script>
        async function getDataFromAPI() {
            let response = await fetch('https://data.go.th/dataset/296f32c6-8c7e-4a54-ade0-0913d35d3168/resource/d132638d-a243-4829-aed8-10ed4fad917f/download/priv_hos.json')
            let rawData = await response.text() 
            let objectData=JSON.parse(rawData)
            console.log(objectData)
            let result = document.getElementById('result') 

            for (let i = 0; i < objectData.features.length; i++) {
                if(objectData.features[i].properties.num_bed <100){
                let content = "โรงพยาบาล: "+ objectData.features[i].properties.name +"  มีเตียง :"+objectData.features[i].properties.num_bed 
                // content += objectData.data[i].debt_value + ' บาท'
                
                let li = document.createElement('li') 
                li.innerHTML = content

                    result.appendChild(li) 
            }
        }
        }
        getDataFromAPI() 
    </script>
</head>

<body>
    <h1>จํานวน</h1>

    <ul id="result"></ul>
</body>

</html>
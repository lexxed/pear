@extends('master')

@section('title',  'Popular travel destinations of Singaporeans')
@section('description', 'Popular travel destinations of Singaporeans')

@section('content')

  <div class="breadcrumb-header">
    <div class="container">
      <div class="columns">
        <div class="column">
          <a href="{{ url('/') }}">Home</a> > 
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="columns">
      <div class="column is-8">

        <div class="box">
          <div class="content">   
            <div class="box"><!-- box 1 -->

              <p><strong>Popular travel destinations of Singapore travellers</strong></p>
           
                  <div class="tagcloud">
                  <a href="{{ url('singapore/travel-packages/Adelaide') }}" class="tag3">Adelaide</a>  
                  <a href="{{ url('singapore/travel-packages/Aegean') }}" class="tag3">Aegean</a>  
                  <a href="{{ url('singapore/travel-packages/Agra') }}" class="tag1">Agra</a>  
                  <a href="{{ url('singapore/travel-packages/Alaska') }}" class="tag2">Alaska</a>  
                  <a href="{{ url('singapore/travel-packages/Amsterdam') }}" class="tag1">Amsterdam</a>  
                  <a href="{{ url('singapore/travel-packages/Anaheim') }}" class="tag2">Anaheim</a>  
                  <a href="{{ url('singapore/travel-packages/Asia') }}" class="tag3">Asia</a>  
                  <a href="{{ url('singapore/travel-packages/Auckland') }}" class="tag2">Auckland</a>  
                  <a href="{{ url('singapore/travel-packages/Australia') }}" class="tag6">Australia</a>  
                  <a href="{{ url('singapore/travel-packages/BINTAN-LAGOON') }}" class="tag4">BINTAN LAGOON</a>  
                  <a href="{{ url('singapore/travel-packages/Bagan') }}" class="tag2">Bagan</a>  
                  <a href="{{ url('singapore/travel-packages/Bago') }}" class="tag1">Bago</a>  
                  <a href="{{ url('singapore/travel-packages/Bali') }}" class="tag6">Bali</a>  
                  <a href="{{ url('singapore/travel-packages/Bali-Kuta-Beach') }}" class="tag3">Bali Kuta Beach</a>  
                  <a href="{{ url('singapore/travel-packages/Bali') }}" class="tag3">Bali,Indonesia</a>  
                  <a href="{{ url('singapore/travel-packages/Bandung') }}" class="tag3">Bandung</a>  
                  <a href="{{ url('singapore/travel-packages/Bangkok') }}" class="tag6">Bangkok</a>  
                  <a href="{{ url('singapore/travel-packages/Barcelona') }}" class="tag1">Barcelona</a>  
                  <a href="{{ url('singapore/travel-packages/Batam') }}" class="tag6">Batam</a>  
                  <a href="{{ url('singapore/travel-packages/Beijing') }}" class="tag4">Beijing</a>  
                  <a href="{{ url('singapore/travel-packages/Belgium') }}" class="tag1">Belgium</a>  
                  <a href="{{ url('singapore/travel-packages/Berjaya') }}" class="tag6">Berjaya</a>  
                  <a href="{{ url('singapore/travel-packages/Berjaya-Redang') }}" class="tag2">Berjaya Redang</a>  
                  <a href="{{ url('singapore/travel-packages/BerjayaTioman') }}" class="tag2">BerjayaTioman</a>  
                  <a href="{{ url('singapore/travel-packages/Bhutan') }}" class="tag2">Bhutan</a>  
                  <a href="{{ url('singapore/travel-packages/Bintan') }}" class="tag6">Bintan</a>  
                  <a href="{{ url('singapore/travel-packages/Boracay') }}" class="tag3">Boracay</a>  
                  <a href="{{ url('singapore/travel-packages/Brisbane') }}" class="tag2">Brisbane</a>  
                  <a href="{{ url('singapore/travel-packages/Brunei') }}" class="tag1">Brunei</a>  
                  <a href="{{ url('singapore/travel-packages/CHRISTMAS-ISLAND') }}" class="tag2">CHRISTMAS ISLAND</a>  
                  <a href="{{ url('singapore/travel-packages/CRUISE') }}" class="tag6">CRUISE</a>  
                  <a href="{{ url('singapore/travel-packages/CRUISE-TO-NOWHERE') }}" class="tag1">CRUISE TO NOWHERE</a>  
                  <a href="{{ url('singapore/travel-packages/Cairns') }}" class="tag3">Cairns</a>  
                  <a href="{{ url('singapore/travel-packages/Cambodia') }}" class="tag6">Cambodia</a>  
                  <a href="{{ url('singapore/travel-packages/CameronHighlands') }}" class="tag3">CameronHighlands</a>  
                  <a href="{{ url('singapore/travel-packages/Canada') }}" class="tag2">Canada</a>  
                  <a href="{{ url('singapore/travel-packages/Cebu') }}" class="tag5">Cebu</a>  
                  <a href="{{ url('singapore/travel-packages/Cebu Island') }}" class="tag1">Cebu Island</a>  
                  <a href="{{ url('singapore/travel-packages/Cha-Am') }}" class="tag1">Cha-Am</a>  
                  <a href="{{ url('singapore/travel-packages/ChawengBeach') }}" class="tag2">ChawengBeach</a>  
                  <a href="{{ url('singapore/travel-packages/ChawengNoiBeach') }}" class="tag2">ChawengNoiBeach</a>  
                  <a href="{{ url('singapore/travel-packages/Chengde') }}" class="tag2">Chengde</a>  
                  <a href="{{ url('singapore/travel-packages/Chengdu') }}" class="tag1">Chengdu</a>  
                  <a href="{{ url('singapore/travel-packages/Cherating') }}" class="tag2">Cherating</a>  
                  <a href="{{ url('singapore/travel-packages/Chiangmai') }}" class="tag6">Chiangmai</a>  
                  <a href="{{ url('singapore/travel-packages/Chong-Qing') }}" class="tag2">Chong Qing</a>  
                  <a href="{{ url('singapore/travel-packages/Christchurch') }}" class="tag2">Christchurch</a>  
                  <a href="{{ url('singapore/travel-packages/ColmarTropicale') }}" class="tag2">ColmarTropicale</a>  
                  <a href="{{ url('singapore/travel-packages/Colombo') }}" class="tag1">Colombo</a>  
                  <a href="{{ url('singapore/travel-packages/Dali') }}" class="tag1">Dali</a>  
                  <a href="{{ url('singapore/travel-packages/Davao') }}" class="tag1">Davao</a>  
                  <a href="{{ url('singapore/travel-packages/Delhi') }}" class="tag1">Delhi</a>  
                  <a href="{{ url('singapore/travel-packages/Desaru') }}" class="tag3">Desaru</a>  
                  <a href="{{ url('singapore/travel-packages/Dili') }}" class="tag2">Dili</a>  
                  <a href="{{ url('singapore/travel-packages/DisneylandHongKong') }}" class="tag2">DisneylandHongKong</a>  
                  <a href="{{ url('singapore/travel-packages/Dubai') }}" class="tag4">Dubai</a>  
                  <a href="{{ url('singapore/travel-packages/East-Coast') }}" class="tag2">East Coast</a>  
                  <a href="{{ url('singapore/travel-packages/Egypt') }}" class="tag3">Egypt</a>  
                  <a href="{{ url('singapore/travel-packages/Emei') }}" class="tag1">Emei</a>  
                  <a href="{{ url('singapore/travel-packages/England') }}" class="tag1">England</a>  
                  <a href="{{ url('singapore/travel-packages/Europe') }}" class="tag6">Europe</a>  
                  <a href="{{ url('singapore/travel-packages/France') }}" class="tag2">France</a>  
                  <a href="{{ url('singapore/travel-packages/Fuzhou') }}" class="tag2">Fuzhou</a>  
                  <a href="{{ url('singapore/travel-packages/Genting') }}" class="tag6">Genting</a>  
                  <a href="{{ url('singapore/travel-packages/Germany') }}" class="tag2">Germany</a>  
                  <a href="{{ url('singapore/travel-packages/GoldCoast') }}" class="tag3">GoldCoast</a>  
                  <a href="{{ url('singapore/travel-packages/Greece') }}" class="tag3">Greece</a>  
                  <a href="{{ url('singapore/travel-packages/GuangZhou') }}" class="tag2">GuangZhou</a>  
                  <a href="{{ url('singapore/travel-packages/Guilin') }}" class="tag2">Guilin</a>  
                  <a href="{{ url('singapore/travel-packages/Hainan') }}" class="tag2">Hainan</a>  
                  <a href="{{ url('singapore/travel-packages/Hangzhou') }}" class="tag2">Hangzhou</a>  
                  <a href="{{ url('singapore/travel-packages/Hanoi') }}" class="tag6">Hanoi</a>  
                  <a href="{{ url('singapore/travel-packages/Hatyai') }}" class="tag3">Hatyai</a>  
                  <a href="{{ url('singapore/travel-packages/Hawaii') }}" class="tag2">Hawaii</a>  
                  <a href="{{ url('singapore/travel-packages/HoChiMinh') }}" class="tag3">HoChiMinh</a>  
                  <a href="{{ url('singapore/travel-packages/Hobart') }}" class="tag2">Hobart</a>  
                  <a href="{{ url('singapore/travel-packages/Hokkaido') }}" class="tag4">Hokkaido</a>  
                  <a href="{{ url('singapore/travel-packages/Holland') }}" class="tag1">Holland</a>  
                  <a href="{{ url('singapore/travel-packages/Hong-Kong') }}" class="tag6">Hong Kong</a>  
                  <a href="{{ url('singapore/travel-packages/Hong-Kong-&-Disney-Land') }}" class="tag3">Hong Kong &  Disney Land</a>  
                  <a href="{{ url('singapore/travel-packages/Macau') }}" class="tag2">Hong Kong & Macau</a>  
                  <a href="{{ url('singapore/travel-packages/HongKong') }}" class="tag6">HongKong</a>  
                  <a href="{{ url('singapore/travel-packages/Honolulu') }}" class="tag1">Honolulu</a>  
                  <a href="{{ url('singapore/travel-packages/Hua-Hin') }}" class="tag2">Hua Hin</a>  
                  <a href="{{ url('singapore/travel-packages/Huangshan') }}" class="tag2">Huangshan</a>  
                  <a href="{{ url('singapore/travel-packages/India') }}" class="tag3">India</a>  
                  <a href="{{ url('singapore/travel-packages/Indonesia') }}" class="tag5">Indonesia</a>  
                  <a href="{{ url('singapore/travel-packages/Ipoh') }}" class="tag2">Ipoh</a>  
                  <a href="{{ url('singapore/travel-packages/Israel') }}" class="tag1">Israel</a>  
                  <a href="{{ url('singapore/travel-packages/Italy') }}" class="tag3">Italy</a>  
                  <a href="{{ url('singapore/travel-packages/JOHOR-BAHRU') }}" class="tag2">JOHOR BAHRU</a>  
                  <a href="{{ url('singapore/travel-packages/Jaipur') }}" class="tag1">Jaipur</a>  
                  <a href="{{ url('singapore/travel-packages/Jakarta') }}" class="tag4">Jakarta</a>  
                  <a href="{{ url('singapore/travel-packages/Japan') }}" class="tag5">Japan</a>  
                  <a href="{{ url('singapore/travel-packages/Jeju') }}" class="tag2">Jeju</a>  
                  <a href="{{ url('singapore/travel-packages/Jiangnan') }}" class="tag2">Jiangnan</a>  
                  <a href="{{ url('singapore/travel-packages/Jimbaran') }}" class="tag2">Jimbaran</a>  
                  <a href="{{ url('singapore/travel-packages/JiuZhaiGou') }}" class="tag1">JiuZhaiGou</a>  
                  <a href="{{ url('singapore/travel-packages/Jogjakarta') }}" class="tag2">Jogjakarta</a>  
                  <a href="{{ url('singapore/travel-packages/Jordan') }}" class="tag1">Jordan</a>  
                  <a href="{{ url('singapore/travel-packages/KUANTAN') }}" class="tag1">KUANTAN</a>  
                  <a href="{{ url('singapore/travel-packages/KUKUP') }}" class="tag1">KUKUP</a>  
                  <a href="{{ url('singapore/travel-packages/Kaohsiung') }}" class="tag2">Kaohsiung</a>  
                  <a href="{{ url('singapore/travel-packages/Kashmir') }}" class="tag2">Kashmir</a>  
                  <a href="{{ url('singapore/travel-packages/KohSamui') }}" class="tag3">KohSamui</a>  
                  <a href="{{ url('singapore/travel-packages/Korea') }}" class="tag5">Korea</a>  
                  <a href="{{ url('singapore/travel-packages/KotaKinabalu') }}" class="tag4">KotaKinabalu</a>  
                  <a href="{{ url('singapore/travel-packages/Krabi') }}" class="tag5">Krabi</a>  
                  <a href="{{ url('singapore/travel-packages/KualaLumpur') }}" class="tag6">KualaLumpur</a>  
                  <a href="{{ url('singapore/travel-packages/Kuching') }}" class="tag6">Kuching</a>  
                  <a href="{{ url('singapore/travel-packages/Kunming') }}" class="tag2">Kunming</a>  
                  <a href="{{ url('singapore/travel-packages/Ladakh') }}" class="tag1">Ladakh</a>  
                  <a href="{{ url('singapore/travel-packages/LagoonResort') }}" class="tag1">LagoonResort</a>  
                  <a href="{{ url('singapore/travel-packages/LagunaRedang') }}" class="tag1">LagunaRedang</a>  
                  <a href="{{ url('singapore/travel-packages/Langkawi') }}" class="tag6">Langkawi</a>  
                  <a href="{{ url('singapore/travel-packages/Las-Vegas') }}" class="tag2">Las Vegas</a>  
                  <a href="{{ url('singapore/travel-packages/Lijiang') }}" class="tag2">Lijiang</a>  
                  <a href="{{ url('singapore/travel-packages/Lombok') }}" class="tag4">Lombok</a>  
                  <a href="{{ url('singapore/travel-packages/London') }}" class="tag3">London</a>  
                  <a href="{{ url('singapore/travel-packages/Los-Angeles') }}" class="tag2">Los Angeles</a>  
                  <a href="{{ url('singapore/travel-packages/MALDIVES') }}" class="tag6">MALDIVES</a>  
                  <a href="{{ url('singapore/travel-packages/MALE') }}" class="tag2">MALE</a>  
                  <a href="{{ url('singapore/travel-packages/Macau') }}" class="tag6">Macau</a>  
                  <a href="{{ url('singapore/travel-packages/Madrid') }}" class="tag1">Madrid</a>  
                  <a href="{{ url('singapore/travel-packages/Malacca') }}" class="tag6">Malacca</a>  
                  <a href="{{ url('singapore/travel-packages/ManaManaBeach') }}" class="tag1">ManaManaBeach</a>  
                  <a href="{{ url('singapore/travel-packages/Manado') }}" class="tag1">Manado</a>  
                  <a href="{{ url('singapore/travel-packages/Manchester') }}" class="tag1">Manchester</a>  
                  <a href="{{ url('singapore/travel-packages/Mandalay') }}" class="tag2">Mandalay</a>  
                  <a href="{{ url('singapore/travel-packages/Manila') }}" class="tag6">Manila</a>  
                  <a href="{{ url('singapore/travel-packages/Mauritius') }}" class="tag4">Mauritius</a>  
                  <a href="{{ url('singapore/travel-packages/Medan') }}" class="tag2">Medan</a>  
                  <a href="{{ url('singapore/travel-packages/Melbourne') }}" class="tag6">Melbourne</a>  
                  <a href="{{ url('singapore/travel-packages/Miami') }}" class="tag1">Miami</a>  
                  <a href="{{ url('singapore/travel-packages/Mines') }}" class="tag2">Mines</a>  
                  <a href="{{ url('singapore/travel-packages/Miri') }}" class="tag1">Miri</a>  
                  <a href="{{ url('singapore/travel-packages/Morocco') }}" class="tag1">Morocco</a>  
                  <a href="{{ url('singapore/travel-packages/Mulu') }}" class="tag1">Mulu</a>  
                  <a href="{{ url('singapore/travel-packages/Myanmar') }}" class="tag3">Myanmar</a>  
                  <a href="{{ url('singapore/travel-packages/NIRWANA-GARDEN') }}" class="tag2">NIRWANA GARDEN</a>  
                  <a href="{{ url('singapore/travel-packages/Nagoya') }}" class="tag2">Nagoya</a>  
                  <a href="{{ url('singapore/travel-packages/Nepal') }}" class="tag3">Nepal</a>  
                  <a href="{{ url('singapore/travel-packages/New-York') }}" class="tag1">New York</a>  
                  <a href="{{ url('singapore/travel-packages/NewZealand') }}" class="tag5">NewZealand</a>  
                  <a href="{{ url('singapore/travel-packages/Nikko') }}" class="tag1">Nikko</a>  
                  <a href="{{ url('singapore/travel-packages/NirwanaResort') }}" class="tag1">NirwanaResort</a>  
                  <a href="{{ url('singapore/travel-packages/NusaDua') }}" class="tag2">NusaDua</a>  
                  <a href="{{ url('singapore/travel-packages/Orlando') }}" class="tag1">Orlando</a>  
                  <a href="{{ url('singapore/travel-packages/Osaka') }}" class="tag2">Osaka</a>  
                  <a href="{{ url('singapore/travel-packages/PALACE-BEACH-&-SPA-RESORT') }}" class="tag2">PALACE BEACH & SPA RESORT</a>  
                  <a href="{{ url('singapore/travel-packages/PANGKOR-ISLAND') }}" class="tag2">PANGKOR ISLAND</a>  
                  <a href="{{ url('singapore/travel-packages/PENGARANG') }}" class="tag1">PENGARANG</a>  
                  <a href="{{ url('singapore/travel-packages/PRAGUE') }}" class="tag2">PRAGUE</a>  
                  <a href="{{ url('singapore/travel-packages/PULAU-BESAR') }}" class="tag2">PULAU BESAR</a>  
                  <a href="{{ url('singapore/travel-packages/PULAU-RAWA') }}" class="tag2">PULAU RAWA</a>  
                  <a href="{{ url('singapore/travel-packages/Palace-Of-Golden-Horses') }}" class="tag1">Palace Of Golden Horses</a>  
                  <a href="{{ url('singapore/travel-packages/Palawan') }}" class="tag2">Palawan</a>  
                  <a href="{{ url('singapore/travel-packages/Paris') }}" class="tag2">Paris</a>  
                  <a href="{{ url('singapore/travel-packages/Pattaya') }}" class="tag4">Pattaya</a>  
                  <a href="{{ url('singapore/travel-packages/Penang') }}" class="tag6">Penang</a>  
                  <a href="{{ url('singapore/travel-packages/Perhentain') }}" class="tag2">Perhentain</a>  
                  <a href="{{ url('singapore/travel-packages/Perhentian-Island') }}" class="tag2">Perhentian Island</a>  
                  <a href="{{ url('singapore/travel-packages/Perth') }}" class="tag5">Perth</a>  
                  <a href="{{ url('singapore/travel-packages/PhnomPenh') }}" class="tag3">PhnomPenh</a>  
                  <a href="{{ url('singapore/travel-packages/Phuket') }}" class="tag6">Phuket</a>  
                  <a href="{{ url('singapore/travel-packages/Portugal') }}" class="tag2">Portugal</a>  
                  <a href="{{ url('singapore/travel-packages/Queenstown') }}" class="tag2">Queenstown</a>  
                  <a href="{{ url('singapore/travel-packages/Redang') }}" class="tag6">Redang</a>  
                  <a href="{{ url('singapore/travel-packages/Rockies') }}" class="tag2">Rockies</a>  
                  <a href="{{ url('singapore/travel-packages/Rome') }}" class="tag1">Rome</a>  
                  <a href="{{ url('singapore/travel-packages/Russia') }}" class="tag1">Russia</a>  
                  <a href="{{ url('singapore/travel-packages/SUPER-STAR-VIRGO') }}" class="tag2">SUPER STAR VIRGO</a>  
                  <a href="{{ url('singapore/travel-packages/Saigon') }}" class="tag4">Saigon</a>  
                  <a href="{{ url('singapore/travel-packages/Samui') }}" class="tag6">Samui</a>  
                  <a href="{{ url('singapore/travel-packages/Sanfrancisco') }}" class="tag1">Sanfrancisco</a>  
                  <a href="{{ url('singapore/travel-packages/Sanur') }}" class="tag3">Sanur</a>  
                  <a href="{{ url('singapore/travel-packages/Saragossa') }}" class="tag1">Saragossa</a>  
                  <a href="{{ url('singapore/travel-packages/Scandanavia') }}" class="tag1">Scandanavia</a>  
                  <a href="{{ url('singapore/travel-packages/Scandinavia') }}" class="tag2">Scandinavia</a>  
                  <a href="{{ url('singapore/travel-packages/Scotland') }}" class="tag2">Scotland</a>  
                  <a href="{{ url('singapore/travel-packages/Seattle') }}" class="tag1">Seattle</a>  
                  <a href="{{ url('singapore/travel-packages/Sendai') }}" class="tag1">Sendai</a>  
                  <a href="{{ url('singapore/travel-packages/Sentosa') }}" class="tag1">Sentosa</a>  
                  <a href="{{ url('singapore/travel-packages/Seoul') }}" class="tag3">Seoul</a>  
                  <a href="{{ url('singapore/travel-packages/Seville') }}" class="tag2">Seville</a>  
                  <a href="{{ url('singapore/travel-packages/Seychelles') }}" class="tag1">Seychelles</a>  
                  <a href="{{ url('singapore/travel-packages/Shanghai') }}" class="tag5">Shanghai</a>  
                  <a href="{{ url('singapore/travel-packages/Shenzhen') }}" class="tag6">Shenzhen</a>  
                  <a href="{{ url('singapore/travel-packages/Sibu-Island') }}" class="tag2">Sibu Island</a>  
                  <a href="{{ url('singapore/travel-packages/SiemReap') }}" class="tag4">SiemReap</a>  
                  <a href="{{ url('singapore/travel-packages/Singapore') }}" class="tag2">Singapore</a>  
                  <a href="{{ url('singapore/travel-packages/Solo') }}" class="tag1">Solo</a>  
                  <a href="{{ url('singapore/travel-packages/South Africa') }}" class="tag3">South Africa</a>  
                  <a href="{{ url('singapore/travel-packages/Spain') }}" class="tag2">Spain</a>  
                  <a href="{{ url('singapore/travel-packages/SunwayLagoon') }}" class="tag2">SunwayLagoon</a>  
                  <a href="{{ url('singapore/travel-packages/Surabaya') }}" class="tag2">Surabaya</a>  
                  <a href="{{ url('singapore/travel-packages/Swiss') }}" class="tag3">Swiss</a>  
                  <a href="{{ url('singapore/travel-packages/Switzerland') }}" class="tag2">Switzerland</a>  
                  <a href="{{ url('singapore/travel-packages/Sydney') }}" class="tag6">Sydney</a>  
                  <a href="{{ url('singapore/travel-packages/Syria') }}" class="tag1">Syria</a>  
                  <a href="{{ url('singapore/travel-packages/TANJONG JARA RESORT') }}" class="tag1">TANJONG JARA RESORT</a>  
                  <a href="{{ url('singapore/travel-packages/Taipei') }}" class="tag6">Taipei</a>  
                  <a href="{{ url('singapore/travel-packages/Taiwan') }}" class="tag6">Taiwan</a>  
                  <a href="{{ url('singapore/travel-packages/Tangalooma') }}" class="tag2">Tangalooma</a>  
                  <a href="{{ url('singapore/travel-packages/Tanjung Pinang') }}" class="tag2">Tanjung Pinang</a>  
                  <a href="{{ url('singapore/travel-packages/TanjungBenoa') }}" class="tag1">TanjungBenoa</a>  
                  <a href="{{ url('singapore/travel-packages/Tasmania') }}" class="tag2">Tasmania</a>  
                  <a href="{{ url('singapore/travel-packages/Terengganu') }}" class="tag2">Terengganu</a>  
                  <a href="{{ url('singapore/travel-packages/TianJin') }}" class="tag2">TianJin</a>  
                  <a href="{{ url('singapore/travel-packages/Tioman') }}" class="tag6">Tioman</a>  
                  <a href="{{ url('singapore/travel-packages/Tokyo') }}" class="tag4">Tokyo</a>  
                  <a href="{{ url('singapore/travel-packages/Turkey') }}" class="tag2">Turkey</a>  
                  <a href="{{ url('singapore/travel-packages/USA') }}" class="tag5">USA</a>  
                  <a href="{{ url('singapore/travel-packages/Ubud') }}" class="tag4">Ubud</a>  
                  <a href="{{ url('singapore/travel-packages/Valencia') }}" class="tag1">Valencia</a>  
                  <a href="{{ url('singapore/travel-packages/Vienna') }}" class="tag1">Vienna</a>  
                  <a href="{{ url('singapore/travel-packages/Vietnam') }}" class="tag6">Vietnam</a>  
                  <a href="{{ url('singapore/travel-packages/Wellington') }}" class="tag2">Wellington</a>  
                  <a href="{{ url('singapore/travel-packages/Xiamen') }}" class="tag3">Xiamen</a>  
                  <a href="{{ url('singapore/travel-packages/Xian') }}" class="tag1">Xian</a>  
                  <a href="{{ url('singapore/travel-packages/Yangon') }}" class="tag4">Yangon</a>  
                  <a href="{{ url('singapore/travel-packages/Yogyakarta') }}" class="tag2">Yogyakarta</a>  
                  <a href="{{ url('singapore/travel-packages/Yunnan') }}" class="tag2">Yunnan</a>  
                  <a href="{{ url('singapore/travel-packages/Zhangjiajie') }}" class="tag2">Zhangjiajie</a>  
                  </div><br>             
            
            </div><!-- box 1 end-->

	        </div>  
        </div>      
  


      </div>

      <div class="column is-4">
        <div class="box related-list">
          <p class="autoplay">
            <span class="autoplay-title">Ads</span>
          </p>

          @include('partials.adsense')          
        </div>
      </div>      



    </div>
  </div>	

  <div class="spacer"></div>

@endsection	
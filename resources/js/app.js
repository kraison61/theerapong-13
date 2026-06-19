/* =========================================================
   DATA — one record per service. The page reads ?service=slug
   from the URL and fills every section from this object.
   ========================================================= */
const img = (id, w=1000) => `https://images.unsplash.com/photo-${id}?w=${w}&q=80&auto=format&fit=crop`;

const SERVICES = {
  wall: {
    icon:'bi-bricks', name:'กำแพงกันดิน', formValue:'กำแพงกันดิน', projCat:'wall',
    kicker:'งานโครงสร้างกันดิน', hero:'1590725140246-20acdee442be',
    price:'2,800.-/ตร.ม.', dur:'14–30 วัน',
    tagline:'กำแพงคอนกรีตเสริมเหล็กที่คำนวณโครงสร้างโดยวิศวกร ป้องกันดินสไลด์และน้ำกัดเซาะอย่างถาวร พร้อมใบ กว. รับรอง',
    overviewTitle:'กำแพงกันดินที่แข็งแรงจริง เริ่มจากการคำนวณที่ถูกต้อง',
    overview:[
      'กำแพงกันดิน (Retaining Wall) ไม่ใช่แค่ก่ออิฐกั้น — มันต้องรับแรงดันดินและน้ำใต้ดินตลอดเวลา หากออกแบบฐานรากหรือเหล็กเสริมผิด กำแพงจะเอียง ร้าว หรือล้มได้ภายในไม่กี่ปี',
      'ทุกงานกำแพงกันดินของเราผ่านการคำนวณโครงสร้างโดยวิศวกรโยธา เลือกระบบฐานราก (เข็มเจาะ / เข็มตอก / ฐานแผ่) ให้เหมาะกับสภาพดินหน้างานจริง พร้อมวางระบบระบายน้ำหลังกำแพงเพื่อลดแรงดันน้ำ',
    ],
    scope:['สำรวจสภาพดินและระดับน้ำใต้ดิน','คำนวณโครงสร้าง + แบบ พร้อมเซ็นใบ กว.','งานฐานราก เข็มเจาะ/เข็มตอก','เหล็กเสริมตามแบบ มอก.','เทคอนกรีตกำลังอัดตามสเปก','ระบบระบายน้ำหลังกำแพง (Weep hole)','ถมกลับและบดอัด','เก็บงานผิวและทำความสะอาดหน้างาน'],
    specs:[['ระบบฐานราก','เข็มเจาะ / เข็มตอก / ฐานแผ่'],['คอนกรีต','กำลังอัด 240–280 ksc'],['เหล็กเสริม','SD40 มอก. 24'],['ความสูงที่รับ','สูงสุด ~6 ม. (ตามแบบ)'],['เอกสาร','แบบ + ใบ กว. + BOQ']],
    faq:[
      ['กำแพงกันดินสูงเท่าไหร่ต้องมีวิศวกรเซ็น?','โดยทั่วไปกำแพงกันดินที่สูงเกิน 1.5–2 ม. หรืออยู่ติดแนวเขตที่ดิน/อาคารข้างเคียง ควรมีวิศวกรคำนวณและเซ็นรับรองทุกกรณี ซึ่งงานของเรารวมบริการนี้ให้ในใบเสนอราคาอยู่แล้ว'],
      ['ดินอ่อนมากจำเป็นต้องตอกเข็มไหม?','ขึ้นกับผลสำรวจหน้างาน ดินอ่อนหรือพื้นที่ใกล้น้ำมักต้องใช้เข็มเจาะหรือเข็มตอกเพื่อกันการทรุดตัว เราจะประเมินและแจ้งทางเลือกพร้อมราคาก่อนเริ่มเสมอ'],
      ['กำแพงร้าวภายในประกันทำอย่างไร?','รอยร้าวโครงสร้างที่ผิดปกติอยู่ในเงื่อนไขประกัน 2 ปี แจ้งผ่านพอร์ทัลลูกค้าได้ 24 ชม. ทีมงานเข้าตรวจและแก้ไขโดยไม่มีค่าใช้จ่าย'],
    ],
  },
  fence: {
    icon:'bi-grid-3x3', name:'รั้วบ้าน', formValue:'รั้วบ้าน', projCat:'fence',
    kicker:'งานรั้วและประตู', hero:'1558618666-fcd25c85cd64',
    price:'1,500.-/ตร.ม.', dur:'7–21 วัน',
    tagline:'รั้วสำเร็จรูป รั้วก่ออิฐ และรั้วโมเดิร์น พร้อมประตูรีโมท ทาสีและเก็บงานเรียบร้อยสวยตามแบบ',
    overviewTitle:'รั้วที่ทั้งปลอดภัยและสวยเข้ากับบ้าน',
    overview:[
      'รั้วคือสิ่งแรกที่คนเห็นเมื่อมาถึงบ้าน เราจึงให้ความสำคัญทั้งความแข็งแรงของเสาเข็ม–ฐานราก และความเรียบร้อยของงานผิว ทาสี และแนวระดับที่ตรงสวย',
      'เลือกได้ทั้งรั้วสำเร็จรูปประหยัดงบ รั้วก่ออิฐฉาบเรียบ หรือรั้วโมเดิร์นผสมไม้ระแนง/เหล็ก พร้อมติดตั้งประตูรีโมทและระบบล็อกได้ในงานเดียว',
    ],
    scope:['วางผังแนวรั้วและตรวจแนวเขต','ฐานรากและเสาเอ็นตามระยะ','ก่อ/ติดตั้งแผงรั้วตามแบบ','งานฉาบ ทาสีรองพื้น–ทับหน้า','ติดตั้งประตูรั้ว + มอเตอร์รีโมท','งานเหล็กดัด/ไม้ระแนง (ถ้ามี)','เก็บงานขอบและทำความสะอาด'],
    specs:[['รูปแบบ','สำเร็จรูป / ก่ออิฐ / โมเดิร์น'],['เสาเอ็น','ทุกระยะ 2.5–3.0 ม.'],['ประตู','บานเลื่อน/บานสวิง + รีโมท'],['ความสูงนิยม','1.8–2.2 ม.'],['งานสี','รองพื้นกันสนิม + ทับหน้า']],
    faq:[
      ['ทำรั้วต้องเว้นระยะจากแนวเขตเท่าไหร่?','รั้วบนแนวเขตทำได้หากตกลงกับเพื่อนบ้าน แต่หากสร้างเต็มแนวควรมีหนังสือยินยอม เราช่วยตรวจแนวหมุดและให้คำแนะนำก่อนเริ่มงาน'],
      ['รั้วโมเดิร์นกับรั้วก่ออิฐ ต่างกันอย่างไร?','รั้วก่ออิฐทึบ ให้ความเป็นส่วนตัวและงบประหยัดกว่า ส่วนรั้วโมเดิร์นเน้นดีไซน์ ผสมวัสดุ ราคาสูงกว่าแต่สวยและโปร่ง เรามีแบบตัวอย่างให้เลือกในวันสำรวจ'],
      ['ติดตั้งประตูรีโมทพร้อมรั้วเลยได้ไหม?','ได้ครับ เราติดตั้งมอเตอร์ ระบบรีโมท และไฟส่องสว่างให้จบในงานเดียว พร้อมรับประกันมอเตอร์ตามเงื่อนไขผู้ผลิต'],
    ],
  },
  road: {
    icon:'bi-signpost-split', name:'ถนน & ทางเข้าบ้าน', formValue:'ถนน & ทางเข้าบ้าน', projCat:'road',
    kicker:'งานถนนและทางเข้า', hero:'1518709268805-4e9042af9f23',
    price:'650.-/ตร.ม.', dur:'5–15 วัน',
    tagline:'ถนนคอนกรีตเสริมเหล็ก ถนนแอสฟัลต์ และ Stamped Concrete สำหรับทางเข้าบ้านที่แข็งแรงและสวย',
    overviewTitle:'ถนนที่รับน้ำหนักได้จริง ไม่ทรุดไม่แตกร้าว',
    overview:[
      'ถนนและทางเข้าบ้านต้องรับน้ำหนักรถยนต์ซ้ำ ๆ ทุกวัน หัวใจอยู่ที่การบดอัดชั้นรองพื้นให้แน่นและความหนาคอนกรีตที่เหมาะกับการใช้งาน',
      'เราทำได้ทั้งถนนคอนกรีตเสริมเหล็กมาตรฐาน ถนนแอสฟัลต์สำหรับพื้นที่กว้าง และ Stamped Concrete พิมพ์ลายสวยสำหรับทางเข้าบ้าน พร้อมวางแนวระบายน้ำกันน้ำขัง',
    ],
    scope:['ปรับระดับและบดอัดชั้นรองพื้น','วางทรายหยาบ/หินคลุกตามแบบ','เหล็กตะแกรง Wire mesh','เทคอนกรีต/ปูแอสฟัลต์','ตัดร่อง Joint กันแตกร้าว','งาน Stamped/ขัดผิว (ถ้าเลือก)','ทำแนวระบายน้ำผิวถนน'],
    specs:[['ประเภท','คอนกรีต / แอสฟัลต์ / Stamped'],['ความหนาคอนกรีต','15–20 ซม.'],['เหล็ก','Wire mesh / เสริมตามแบบ'],['ชั้นรองพื้น','บดอัดแน่น 95% Proctor'],['Joint','ตัดร่องทุก 3–4 ม.']],
    faq:[
      ['ถนนคอนกรีตหนาแค่ไหนถึงรับรถบรรทุกได้?','ทางเข้าบ้านทั่วไปใช้ 15 ซม. แต่หากมีรถบรรทุก/รถปูนเข้าออก เราจะเพิ่มเป็น 18–20 ซม. พร้อมเสริมเหล็กให้เหมาะกับน้ำหนักใช้งาน'],
      ['ทำไมถนนคอนกรีตต้องตัดร่อง (Joint)?','คอนกรีตขยาย–หดตัวตามอุณหภูมิ การตัดร่องเป็นการ "กำหนดจุดให้ร้าว" เป็นแนวตรงสวย แทนที่จะปล่อยให้แตกมั่ว ช่วยยืดอายุถนนได้มาก'],
      ['Stamped Concrete ลื่นไหมเวลาฝนตก?','เราเคลือบน้ำยากันลื่น (Anti-slip sealer) ให้ในงาน Stamped ทุกครั้ง จึงปลอดภัยสำหรับทางเดินและทางเข้ารถแม้ช่วงฝนตก'],
    ],
  },
  slab: {
    icon:'bi-square', name:'ลานคอนกรีต & ลานจอดรถ', formValue:'ลานคอนกรีต / ลานจอดรถ', projCat:'slab',
    kicker:'งานลานและพื้น', hero:'1604719312566-8912e9227c6a',
    price:'550.-/ตร.ม.', dur:'3–10 วัน',
    tagline:'ลานคอนกรีตขัดมัน ขัดเงา หรือ Polished Concrete ทนทาน ผิวเรียบสวย ไม่แตกร้าวง่าย',
    overviewTitle:'ลานคอนกรีตผิวเรียบ ใช้งานหนักได้นานหลายปี',
    overview:[
      'ลานจอดรถและลานอเนกประสงค์ต้องทนทั้งน้ำหนัก น้ำ และแดด งานจึงต้องเริ่มจากการบดอัดพื้นและควบคุมความหนาคอนกรีตให้สม่ำเสมอ',
      'เราทำผิวได้หลายระดับ ตั้งแต่ขัดหยาบกันลื่น ขัดมันเรียบ ไปจนถึง Polished Concrete เงางามระดับโชว์รูม พร้อมตัด Joint และเคลือบกันคราบน้ำมัน',
    ],
    scope:['ปรับระดับและบดอัดพื้น','วางทรายและแผ่นกันชื้น','เหล็กตะแกรง Wire mesh','เทคอนกรีตและปรับระดับด้วยเลเซอร์','ขัดมัน/ขัดเงาตามที่เลือก','ตัดร่อง Joint','เคลือบกันคราบ (ถ้าเลือก)'],
    specs:[['ผิวงาน','ขัดหยาบ / ขัดมัน / Polished'],['ความหนา','10–15 ซม.'],['เหล็ก','Wire mesh 4–6 มม.'],['ปรับระดับ','เลเซอร์ Laser screed'],['เคลือบผิว','Sealer กันคราบน้ำมัน']],
    faq:[
      ['ลานคอนกรีตขัดมันกับ Polished ต่างกันยังไง?','ขัดมันคือแต่งผิวให้เรียบด้วยใบขัดตอนคอนกรีตยังสด ส่วน Polished คือขัดด้วยเครื่องเพชรหลังคอนกรีตแข็ง ได้ผิวเงาลึกและทนกว่า แต่ราคาสูงกว่า'],
      ['ลานจอดรถกันคราบน้ำมันได้ไหม?','ได้ครับ เราเคลือบ Sealer กันซึมหลังงานเสร็จ ช่วยให้คราบน้ำมัน/สนิมไม่ฝังลงเนื้อคอนกรีต เช็ดทำความสะอาดง่ายขึ้นมาก'],
      ['ลานคอนกรีตใหม่ใช้งานได้เมื่อไหร่?','เดินได้ใน 1–2 วัน แต่ควรรอจอดรถหลัง 7 วัน และรับน้ำหนักเต็มที่เมื่อครบ 28 วัน ซึ่งเป็นช่วงที่คอนกรีตแข็งแรงเต็มกำลัง'],
    ],
  },
  drain: {
    icon:'bi-water', name:'ระบบระบายน้ำ', formValue:'ระบบระบายน้ำ', projCat:'drain',
    kicker:'งานระบายน้ำและบ่อพัก', hero:'1581094288338-2314dddb7ece',
    price:'1,200.-/เมตร', dur:'3–12 วัน',
    tagline:'วางท่อระบายน้ำ บ่อพัก บ่อดักไขมัน และ Sump pit ป้องกันน้ำท่วมขังรอบบ้านอย่างเป็นระบบ',
    overviewTitle:'แก้น้ำท่วมขังที่ต้นเหตุ ด้วยระบบที่ออกแบบมาให้ไหลจริง',
    overview:[
      'น้ำท่วมขังรอบบ้านมักไม่ได้เกิดจากท่อตัน แต่เกิดจากการวางระดับท่อที่ไม่ลาดเอียงพอ น้ำจึงไม่ไหลและขังเป็นแอ่ง',
      'เราออกแบบระบบระบายน้ำโดยคำนวณความลาด (Slope) ตำแหน่งบ่อพัก และจุดปล่อยน้ำให้เหมาะกับพื้นที่จริง พร้อมบ่อดักไขมันและ Sump pit สำหรับพื้นที่ต่ำ',
    ],
    scope:['สำรวจระดับและทิศทางการไหลของน้ำ','ขุดร่องและวางระดับ Slope','วางท่อ คสล./PVC ตามแบบ','ติดตั้งบ่อพัก/บ่อดักไขมัน','ติดตั้ง Sump pit + ปั๊ม (ถ้าจำเป็น)','ถมกลบและบดอัด','ทดสอบการไหลของน้ำ'],
    specs:[['ท่อ','คสล. / PVC Ø20–60 ซม.'],['ความลาด','1:100 ขึ้นไป'],['บ่อพัก','ทุกระยะ/ทุกหักเลี้ยว'],['งานเสริม','บ่อดักไขมัน / Sump pit'],['ทดสอบ','เทน้ำตรวจการไหลก่อนส่งมอบ']],
    faq:[
      ['น้ำท่วมขังหลังบ้านแก้ได้แบบถาวรไหม?','แก้ได้ครับ ถ้าวางระบบให้น้ำไหลออกได้จริง เราจะหาจุดต่ำสุดและจุดปล่อยน้ำ แล้ววางท่อพร้อมความลาดที่ถูกต้อง ส่วนพื้นที่ที่ต่ำกว่าท่อสาธารณะจะใช้ Sump pit ดันน้ำออก'],
      ['บ่อดักไขมันจำเป็นไหมสำหรับบ้านพัก?','จำเป็นถ้ามีน้ำจากครัว เพราะไขมันจะจับตัวอุดตันท่อในระยะยาว บ่อดักไขมันช่วยยืดอายุระบบและลดปัญหากลิ่นย้อน'],
      ['วางท่อระบายน้ำต้องรื้อพื้นเดิมเยอะไหม?','เราขุดเฉพาะแนวท่อเท่าที่จำเป็น และคืนสภาพพื้นให้หลังงานเสร็จ หากเป็นพื้นคอนกรีตเดิม จะแจ้งขอบเขตการรื้อ–คืนสภาพในใบเสนอราคาให้ชัดเจน'],
    ],
  },
  land: {
    icon:'bi-bounding-box', name:'ปรับพื้นที่ & ถมดิน', formValue:'ปรับพื้นที่ / ถมดิน', projCat:'all',
    kicker:'งานดินและปรับพื้นที่', hero:'1621905251918-48416bd8575a',
    price:'220.-/คิว', dur:'2–7 วัน',
    tagline:'ถมดิน บดอัด ปรับระดับ พร้อมรถแบคโฮและรถบดหน้างาน คิดราคาตามคิวจริง ไม่บวกเพิ่ม',
    overviewTitle:'ถมดินที่บดอัดแน่นจริง รากฐานของทุกงานก่อสร้าง',
    overview:[
      'งานถมดินที่ทำไม่ดีคือต้นเหตุของบ้านทรุด พื้นแตก ในอีกไม่กี่ปีข้างหน้า หัวใจไม่ได้อยู่ที่ปริมาณดิน แต่อยู่ที่การบดอัดเป็นชั้น ๆ ให้แน่นพอ',
      'เราถมดินแบบบดอัดเป็นชั้น (Layer compaction) ด้วยรถบดมาตรฐาน ควบคุมระดับด้วยกล้องระดับ และคิดราคาตามคิวที่ลงจริง พร้อมใบชั่ง/ใบส่งดินให้ตรวจสอบได้',
    ],
    scope:['สำรวจและคำนวณปริมาณดิน','เคลียร์พื้นที่และวัชพืช','ถมดินเป็นชั้นและบดอัด','ปรับระดับด้วยกล้องระดับ','งานรถแบคโฮ/รถบดหน้างาน','ทำร่องระบายน้ำชั่วคราว (ถ้าจำเป็น)'],
    specs:[['ประเภทดิน','ดินถม / ลูกรัง / หินคลุก'],['การบดอัด','เป็นชั้น ชั้นละ 30–50 ซม.'],['เครื่องจักร','แบคโฮ + รถบด'],['ควบคุมระดับ','กล้องระดับ'],['คิดราคา','ตามคิวจริง + ใบชั่ง']],
    faq:[
      ['คิดราคาถมดินยังไงไม่ให้โดนโกงคิว?','เราคิดตามคิวที่ลงจริง พร้อมใบชั่ง/ใบส่งดินทุกเที่ยว ลูกค้าตรวจนับได้ และในใบเสนอราคาจะระบุปริมาณประเมินไว้ชัดเจนตั้งแต่ต้น'],
      ['ถมดินใหม่ต้องรอนานแค่ไหนถึงสร้างบ้านได้?','ถ้าบดอัดเป็นชั้นอย่างถูกวิธี สามารถลงงานฐานรากได้เร็ว แต่โดยทั่วไปแนะนำให้ทิ้งระยะให้ดินเซ็ตตัวตามประเภทดินและน้ำหนักอาคาร เราจะแนะนำตามหน้างานจริง'],
      ['ดินถมกับลูกรัง เลือกอย่างไหนดี?','ดินถมเหมาะกับการยกระดับทั่วไป ส่วนลูกรัง/หินคลุกแน่นกว่า เหมาะเป็นชั้นบนสำหรับรับน้ำหนักหรือทำลานจอดรถ เราช่วยเลือกให้เหมาะกับการใช้งานและงบประมาณ'],
    ],
  },
};

const PROJECTS = [
  { cat:'wall', img:'1590725140246-20acdee442be', tag:'กำแพงกันดิน', title:'กำแพงกันดิน บางบัวทอง', meta:'ยาว 64 ม. · เข็มเจาะ Ø35 ซม. · 28 วัน' },
  { cat:'fence', img:'1558618666-fcd25c85cd64', tag:'รั้วบ้าน', title:'รั้วโมเดิร์น พร้อมประตูรีโมท', meta:'ยาว 38 ม. · ราชพฤกษ์ · 18 วัน' },
  { cat:'road', img:'1518709268805-4e9042af9f23', tag:'ถนน & ทางเข้า', title:'ทางเข้าหมู่บ้านคอนกรีต', meta:'850 ตร.ม. · ปทุมธานี · 14 วัน' },
  { cat:'slab', img:'1604719312566-8912e9227c6a', tag:'ลานคอนกรีต', title:'ลานจอดรถคอนกรีตขัดมัน', meta:'120 ตร.ม. · นนทบุรี · 7 วัน' },
  { cat:'wall', img:'1517089596392-fb9a9033e05b', tag:'กำแพงกันดิน', title:'กำแพงคันสระ บางใหญ่', meta:'ยาว 120 ม. · สูง 2.4 ม. · 45 วัน' },
  { cat:'drain', img:'1581094288338-2314dddb7ece', tag:'ระบายน้ำ', title:'วางท่อระบายรอบบ้าน', meta:'ยาว 86 ม. · Ø60 ซม. · 10 วัน' },
  { cat:'fence', img:'1486718448742-163732cd1544', tag:'รั้วบ้าน', title:'รั้วก่ออิฐ ทาวน์โฮม 6 หลัง', meta:'ยาว 156 ม. · นวนคร · 24 วัน' },
  { cat:'slab', img:'1581235720704-06d3acfcb36f', tag:'ลานคอนกรีต', title:'ลานคอนกรีตโรงเก็บของ', meta:'240 ตร.ม. · ลาดกระบัง · 9 วัน' },
];

/* ---------- Resolve which service to show ---------- */
const params = new URLSearchParams(location.search);
let slug = params.get('service');
if(!slug || !SERVICES[slug]) slug = 'wall';        // fallback if missing/invalid
const S = SERVICES[slug];

/* ---------- Fill HEAD + breadcrumb + hero ---------- */
document.title = `${S.name} — ธีรพงษ์การช่าง`;
document.getElementById('crumbNow').textContent = S.name;
document.getElementById('heroKicker').textContent = S.kicker;
document.getElementById('heroIcon').innerHTML = `<i class="bi ${S.icon}"></i>`;
document.getElementById('heroTitle').textContent = S.name;
document.getElementById('heroDesc').textContent = S.tagline;
const heroImg = document.getElementById('heroImg');
heroImg.src = img(S.hero, 1200); heroImg.alt = S.name;

document.getElementById('heroStats').innerHTML = [
  ['bi-cash-coin', `เริ่มต้น ${S.price}`],
  ['bi-calendar-check', `ระยะงาน ${S.dur}`],
  ['bi-patch-check-fill', 'รับประกัน 2 ปี'],
].map(([ic,t]) => `<span><i class="bi ${ic} text-accent mr-1.5"></i> ${t}</span>`).join('');

/* ---------- Overview + scope ---------- */
document.getElementById('overviewTitle').textContent = S.overviewTitle;
document.getElementById('overviewBody').innerHTML = S.overview.map(p => `<p>${p}</p>`).join('');
document.getElementById('scopeList').innerHTML = S.scope.map(s => `
  <li class="flex items-start gap-2.5"><i class="bi bi-check-circle-fill text-accent mt-1 shrink-0"></i><span>${s}</span></li>`).join('');

/* ---------- Spec/price card ---------- */
document.getElementById('priceBig').textContent = S.price;
document.getElementById('specList').innerHTML = S.specs.map(([k,v]) => `
  <div class="flex items-center justify-between gap-4 py-3 text-[15px]">
    <dt class="text-muted">${k}</dt><dd class="font-semibold text-navy-900 text-right">${v}</dd>
  </div>`).join('');

/* ---------- Related projects (filtered by category) ---------- */
let rel = S.projCat === 'all' ? PROJECTS.slice(0,3) : PROJECTS.filter(p => p.cat === S.projCat);
if(rel.length === 0) rel = PROJECTS.slice(0,3);
document.getElementById('relTitle').textContent = `ตัวอย่างงาน${S.name}ที่เราทำมา`;
document.getElementById('relGrid').innerHTML = rel.map(p => `
  <a href="index.html#projects" class="group relative block aspect-4/3 overflow-hidden rounded-2xl ring-1 ring-line">
    <img src="${img(p.img)}" alt="${p.title}" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition duration-500" />
    <div class="absolute inset-0 bg-gradient-to-t from-navy-950/85 via-navy-950/15 to-transparent"></div>
    <div class="absolute inset-0 p-5 flex flex-col justify-end text-white">
      <span class="self-start rounded-full bg-white/20 backdrop-blur px-2.5 py-1 text-[11px] font-semibold uppercase tracking-wide">${p.tag}</span>
      <h3 class="mt-2.5 text-lg font-bold">${p.title}</h3>
      <p class="text-[13px] text-white/75">${p.meta}</p>
    </div>
  </a>`).join('');

/* ---------- Service-specific FAQ ---------- */
document.getElementById('faqList').innerHTML = S.faq.map(([q,a], i) => `
  <details class="group rounded-2xl border border-line bg-white px-5 [&_summary::-webkit-details-marker]:hidden" ${i===0?'open':''}>
    <summary class="flex cursor-pointer items-center justify-between gap-4 py-4 font-semibold text-navy-900">
      ${q}
      <i class="bi bi-plus-lg text-accent transition group-open:rotate-45"></i>
    </summary>
    <p class="pb-5 -mt-1 text-[15px] text-ink2 leading-relaxed">${a}</p>
  </details>`).join('');

/* ---------- Other services (everything except current) ---------- */
document.getElementById('otherGrid').innerHTML = Object.entries(SERVICES)
  .filter(([k]) => k !== slug)
  .map(([k,s]) => `
    <a href="service.html?service=${k}" class="group flex flex-col rounded-2xl border border-line bg-white p-7 hover:border-navy-900 hover:-translate-y-1 hover:shadow-2xl hover:shadow-navy-900/10 transition">
      <span class="grid place-items-center w-14 h-14 rounded-xl bg-accent/8 text-accent text-2xl mb-5"><i class="bi ${s.icon}"></i></span>
      <h3 class="text-xl font-bold text-navy-900">${s.name}</h3>
      <p class="mt-2 text-[15px] text-ink2 leading-relaxed flex-1">${s.tagline}</p>
      <div class="mt-5 pt-4 border-t border-dashed border-line flex gap-5 text-[13px] text-muted">
        <span>เริ่มต้น <b class="text-navy-900 font-semibold">${s.price}</b></span>
        <span>ระยะงาน <b class="text-navy-900 font-semibold">${s.dur}</b></span>
      </div>
      <span class="mt-4 inline-flex items-center gap-1.5 text-accent font-semibold text-[15px]">ดูรายละเอียดบริการ <i class="bi bi-arrow-right group-hover:translate-x-1 transition"></i></span>
    </a>`).join('');

/* ---------- Pricing table (all services, current row highlighted) ---------- */
document.getElementById('priceTableBody').innerHTML = Object.entries(SERVICES).map(([k,s]) => {
  const here = k === slug;
  return `
    <tr class="${here ? 'bg-hivis/10' : 'hover:bg-surface'} transition">
      <td class="px-6 py-4">
        <div class="flex items-center gap-3">
          <span class="grid place-items-center w-9 h-9 rounded-lg bg-accent/8 text-accent shrink-0"><i class="bi ${s.icon}"></i></span>
          <span class="font-semibold text-navy-900">${s.name}${here ? ' <span class="ml-1 align-middle rounded-full bg-hivis/30 text-accent text-[11px] font-semibold px-2 py-0.5">หน้านี้</span>' : ''}</span>
        </div>
      </td>
      <td class="px-6 py-4 font-mono font-semibold text-navy-900 tabular-nums whitespace-nowrap">${s.price}</td>
      <td class="px-6 py-4 text-ink2 whitespace-nowrap">${s.dur}</td>
      <td class="px-6 py-4 text-right">
        <a href="service.html?service=${k}" class="inline-flex items-center gap-1.5 text-accent font-semibold text-[14px] hover:gap-2.5 transition-all whitespace-nowrap">ดูบริการ <i class="bi bi-arrow-right"></i></a>
      </td>
    </tr>`;
}).join('');

/* ---------- Pre-select the matching option in the quote form ---------- */
const sel = document.getElementById('serviceSelect');
[...sel.options].forEach(o => { if(o.value === S.formValue || o.text === S.formValue) o.selected = true; });

/* ---------- Financing carousel (3 finance partners — edit FINANCE below) ---------- */
const FINANCE = [
  { icon:'bi-bank2',          name:'พันธมิตรสินเชื่อ 1 (แก้ชื่อบริษัทได้)', highlight:'ผ่อน 0% นานสูงสุด 10 เดือน',         desc:'เริ่มงานได้ทันที ผ่อนชำระเป็นงวดสบาย ๆ ไม่มีดอกเบี้ยในช่วงโปรโมชัน เหมาะกับงานรั้ว ลาน และต่อเติมขนาดเล็ก–กลาง' },
  { icon:'bi-houses-fill',    name:'พันธมิตรสินเชื่อ 2 (แก้ชื่อบริษัทได้)', highlight:'วงเงินสูงสุด 3,000,000 บาท',         desc:'สินเชื่อเพื่อการก่อสร้างและต่อเติมบ้าน อนุมัติไว เอกสารไม่ยุ่งยาก เหมาะกับงานโครงสร้างขนาดใหญ่ เช่น กำแพงกันดิน' },
  { icon:'bi-graph-up-arrow', name:'พันธมิตรสินเชื่อ 3 (แก้ชื่อบริษัทได้)', highlight:'ดอกเบี้ยพิเศษสำหรับเจ้าของกิจการ',  desc:'สินเชื่อ SME สำหรับผู้ประกอบการและโครงการหมู่บ้าน ผ่อนได้ยาวสูงสุด 60 เดือน วางแผนกระแสเงินสดได้สบาย' },
];
(function(){
  const track = document.getElementById('finTrack');
  if(!track) return;
  const dotsWrap = document.getElementById('finDots');
  const vp = document.getElementById('finViewport');
  let i = 0, timer;

  track.innerHTML = FINANCE.map(f => `
    <div class="shrink-0 basis-full min-w-0">
      <div class="relative overflow-hidden rounded-2xl bg-navy-900 text-white">
        <div class="pointer-events-none absolute -right-16 -top-16 h-64 w-64 rounded-full bg-hivis/15 blur-2xl"></div>
        <div class="pointer-events-none absolute -left-10 -bottom-20 h-56 w-56 rounded-full bg-accent/30 blur-2xl"></div>
        <div class="relative p-8 lg:p-10 flex flex-col lg:flex-row lg:items-center gap-7">
          <span class="grid place-items-center w-16 h-16 rounded-2xl bg-hivis text-navy-900 text-3xl shrink-0"><i class="bi ${f.icon}"></i></span>
          <div class="flex-1">
            <div class="flex items-center gap-2.5 flex-wrap">
              <span class="font-bold text-xl">${f.name}</span>
              <span class="rounded-full bg-hivis/20 text-hivis text-[12px] font-semibold px-2.5 py-1">${f.highlight}</span>
            </div>
            <p class="mt-2.5 text-white/70 leading-relaxed max-w-2xl">${f.desc}</p>
            <p class="mt-2 text-[12px] text-white/40">ดอกเบี้ยและเงื่อนไขการอนุมัติเป็นไปตามที่ผู้ให้สินเชื่อกำหนด · อยู่ระหว่างการพิจารณาคุณสมบัติผู้กู้</p>
          </div>
          <div class="flex flex-col gap-2.5 shrink-0">
            <a href="#contact" class="inline-flex items-center justify-center gap-2 rounded-xl bg-hivis px-6 py-3.5 font-semibold text-navy-900 hover:bg-white transition whitespace-nowrap">ปรึกษาแผนผ่อน <i class="bi bi-arrow-right"></i></a>
            <a href="tel:0812345678" class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/25 px-6 py-3 font-semibold text-white hover:bg-white/10 transition whitespace-nowrap"><i class="bi bi-telephone-fill text-hivis"></i> โทรสอบถาม</a>
          </div>
        </div>
      </div>
    </div>`).join('');

  dotsWrap.innerHTML = FINANCE.map((_,idx)=>`<button data-i="${idx}" aria-label="ไปสไลด์ ${idx+1}" class="fin-dot h-2.5 rounded-full transition-all"></button>`).join('');
  const dots = [...dotsWrap.children];

  function go(n){
    i = (n + FINANCE.length) % FINANCE.length;
    track.style.transform = `translateX(-${i*100}%)`;
    dots.forEach((d,idx)=> d.className = 'fin-dot h-2.5 rounded-full transition-all ' + (idx===i ? 'w-7 bg-accent' : 'w-2.5 bg-line hover:bg-muted'));
  }
  function play(){ clearInterval(timer); timer = setInterval(()=>go(i+1), 5500); }

  document.getElementById('finNext').addEventListener('click', ()=>{ go(i+1); play(); });
  document.getElementById('finPrev').addEventListener('click', ()=>{ go(i-1); play(); });
  dotsWrap.addEventListener('click', e=>{ const b=e.target.closest('.fin-dot'); if(b){ go(+b.dataset.i); play(); } });
  vp.addEventListener('mouseenter', ()=>clearInterval(timer));
  vp.addEventListener('mouseleave', play);

  let x0=null;
  vp.addEventListener('touchstart', e=>{ x0=e.touches[0].clientX; }, {passive:true});
  vp.addEventListener('touchend', e=>{ if(x0===null) return; const dx=e.changedTouches[0].clientX-x0; if(Math.abs(dx)>40) go(i + (dx<0?1:-1)); x0=null; play(); }, {passive:true});

  go(0); play();
})();

/* ---------- Mobile menu ---------- */
const mm = document.getElementById('mobileMenu');
document.getElementById('menuBtn').addEventListener('click', () => mm.classList.toggle('hidden'));
mm.addEventListener('click', e => { if(e.target.tagName==='A') mm.classList.add('hidden'); });

/* ---------- Form ---------- */
document.getElementById('quoteForm').addEventListener('submit', e => {
  e.preventDefault();
  if(!e.target.checkValidity()){ e.target.reportValidity(); return; }
  document.getElementById('quoteOK').classList.remove('hidden');
  e.target.reset();
  setTimeout(() => document.getElementById('quoteOK').classList.add('hidden'), 6000);
});
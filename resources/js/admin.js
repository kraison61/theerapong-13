import Alpine from 'alpinejs';

Alpine.data('adminApp', () => ({
    currentPage: 'dashboard',
    mobileMenuOpen: false,
    deleteModal: false,
    deleteId: null,
    selectedUser: null,

    get pageTitle() {
        const titles = {
            dashboard: 'Dashboard',
            services: 'จัดการบริการ',
            articles: 'บทความ',
            gallery: 'แกลเลอรี',
            users: 'สมาชิก',
        };
        return titles[this.currentPage] || 'Dashboard';
    },
    services:[],

    // services: [
    //     { id: 1, name: 'ซ่อมแอร์บ้านและคอนโด', desc: 'บริการซ่อมบำรุงแอร์ทุกยี่ห้อ', category: 'งานซ่อม', price: '฿1,500', active: true, image: 'https://images.unsplash.com/photo-1631545806609-29c8640929c?w=100&h=100&fit=crop' },
    //     { id: 2, name: 'ติดตั้งระบบไฟฟ้า', desc: 'เดินสายไฟ ติดตั้งเบรกเกอร์', category: 'งานติดตั้ง', price: '฿3,500', active: true, image: 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=100&h=100&fit=crop' },
    //     { id: 3, name: 'งานประปาครบวงจร', desc: 'ซ่อมท่อรั่ว ติดตั้งสุขภัณฑ์', category: 'งานซ่อม', price: '฿800', active: true, image: 'https://images.unsplash.com/photo-1585704032915-c3400ca199e7?w=100&h=100&fit=crop' },
    //     { id: 4, name: 'ล้างแอร์ประจำปี', desc: 'ล้างทำความสะอาดแอร์', category: 'งานบำรุงรักษา', price: '฿600', active: false, image: 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=100&h=100&fit=crop' },
    //     { id: 5, name: 'ติดตั้งกล้องวงจรปิด', desc: 'CCTV ระบบ IP Camera', category: 'งานติดตั้ง', price: '฿8,900', active: true, image: 'https://images.unsplash.com/photo-1557324232-b8917d3c3dcb?w=100&h=100&fit=crop' },
    // ],

    articles: [
        { id: 1, title: '5 สัญญาณเตือนว่าแอร์บ้านคุณกำลังจะพัง', excerpt: 'เรียนรู้วิธีสังเกตอาการผิดปกติของแอร์ก่อนที่ปัญหาจะลุกลาม', author: 'ธีรพงษ์', date: '2 วันก่อน', views: '1,245', status: 'published', statusLabel: 'เผยแพร่แล้ว', image: 'https://images.unsplash.com/photo-1631545806609-29c8640929c?w=200&h=200&fit=crop' },
        { id: 2, title: 'วิธีเลือกช่างไฟฟ้าที่ดีและมีคุณภาพ', excerpt: 'การเลือกช่างไฟฟ้าที่มีความรู้และประสบการณ์สำคัญต่อความปลอดภัย', author: 'สมชาย', date: '5 วันก่อน', views: '892', status: 'published', statusLabel: 'เผยแพร่แล้ว', image: 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=200&h=200&fit=crop' },
        { id: 3, title: 'การบำรุงรักษาระบบประปาด้วยตัวเอง', excerpt: 'เทคนิคง่ายๆ ที่คุณสามารถทำได้โดยไม่ต้องเรียกช่าง', author: 'วิภา', date: '1 สัปดาห์ก่อน', views: '567', status: 'draft', statusLabel: 'ฉบับร่าง', image: 'https://images.unsplash.com/photo-1585704032915-c3400ca199e7?w=200&h=200&fit=crop' },
        { id: 4, title: 'โปรโมชั่นพิเศษเดือนกรกฎาคม 2569', excerpt: 'ลดสูงสุด 30% สำหรับบริการล้างแอร์และติดตั้งกล้องวงจรปิด', author: 'ธีรพงษ์', date: 'กำหนด 5 ก.ค.', views: '0', status: 'scheduled', statusLabel: 'กำหนดเวลา', image: 'https://images.unsplash.com/photo-1557324232-b8917d3c3dcb?w=200&h=200&fit=crop' },
    ],

    galleryImages: [
        { id: 1, name: 'project_001.jpg', size: '2.4 MB', url: 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=300&h=300&fit=crop' },
        { id: 2, name: 'project_002.jpg', size: '1.8 MB', url: 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=300&h=300&fit=crop' },
        { id: 3, name: 'project_003.jpg', size: '3.1 MB', url: 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=300&h=300&fit=crop' },
        { id: 4, name: 'project_004.jpg', size: '2.2 MB', url: 'https://images.unsplash.com/photo-1557324232-b8917d3c3dcb?w=300&h=300&fit=crop' },
        { id: 5, name: 'project_005.jpg', size: '1.5 MB', url: 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=300&h=300&fit=crop' },
        { id: 6, name: 'project_006.jpg', size: '2.8 MB', url: 'https://images.unsplash.com/photo-1585704032915-c3400ca199e7?w=300&h=300&fit=crop' },
        { id: 7, name: 'project_007.jpg', size: '1.9 MB', url: 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=300&h=300&fit=crop' },
        { id: 8, name: 'project_008.jpg', size: '2.6 MB', url: 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=300&h=300&fit=crop' },
        { id: 9, name: 'project_009.jpg', size: '2.1 MB', url: 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=300&h=300&fit=crop' },
        { id: 10, name: 'project_010.jpg', size: '1.7 MB', url: 'https://images.unsplash.com/photo-1557324232-b8917d3c3dcb?w=300&h=300&fit=crop' },
        { id: 11, name: 'project_011.jpg', size: '2.3 MB', url: 'https://images.unsplash.com/photo-1585704032915-c3400ca199e7?w=300&h=300&fit=crop' },
        { id: 12, name: 'project_012.jpg', size: '2.9 MB', url: 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=300&h=300&fit=crop' },
    ],

    users: [
        { id: 1, name: 'สมชาย ใจดี', email: 'somchai@example.com', phone: '081-234-5678', role: 'customer', roleLabel: 'ลูกค้า', active: true, joined: '02/01/2569', initial: 'ส', avatarColor: 'bg-blue-500', orders: 12, spent: '45.2k', lastLogin: '2 ชม.' },
        { id: 2, name: 'วิภา รักงาน', email: 'wipa@example.com', phone: '082-345-6789', role: 'technician', roleLabel: 'ช่าง', active: true, joined: '15/02/2569', initial: 'ว', avatarColor: 'bg-purple-500', orders: 45, spent: '128k', lastLogin: '1 วัน' },
        { id: 3, name: 'ประยุทธ์ มั่นคง', email: 'prayut@example.com', phone: '083-456-7890', role: 'admin', roleLabel: 'แอดมิน', active: true, joined: '01/01/2568', initial: 'ป', avatarColor: 'bg-red-500', orders: 0, spent: '0', lastLogin: '5 นาที' },
        { id: 4, name: 'นภา สดใส', email: 'napa@example.com', phone: '084-567-8901', role: 'customer', roleLabel: 'ลูกค้า', active: false, joined: '20/03/2569', initial: 'น', avatarColor: 'bg-pink-500', orders: 3, spent: '8.5k', lastLogin: '1 เดือน' },
        { id: 5, name: 'ธนา รุ่งเรือง', email: 'thana@example.com', phone: '085-678-9012', role: 'customer', roleLabel: 'ลูกค้า', active: true, joined: '10/04/2569', initial: 'ธ', avatarColor: 'bg-emerald-500', orders: 8, spent: '22.1k', lastLogin: '3 ชม.' },
    ],
}));

Alpine.start();

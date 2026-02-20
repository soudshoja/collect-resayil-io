# Resayil Mobile App - HTML/CSS Mockups

Comprehensive HTML/CSS mockups of every screen in the Resayil mobile app, created from the actual Flutter codebase.

## 📱 Screens Included

### 🔐 Authentication
- **Login Screen** (`login.html`) - New email/password authentication design with "Forgot password?" and "Register" links

### 💬 Messaging
- **Chat List** (`chat-list.html`) - Main chat interface with search, filters, and unread indicators
- **Chat Messages** (`chat-detail.html`) - Real-time messaging with message bubbles and input bar
- **Contacts** (`contacts.html`) - Contact picker for selecting recipients

### ✨ Status/Stories
- **Status List** (`status-list.html`) - View status updates with unviewed indicators
- **Status Viewer** (`status-viewer.html`) - Full-screen story viewer with reactions and replies

### 👤 User
- **Profile** (`profile.html`) - User profile with editable fields
- **Settings** (`settings.html`) - App settings for notifications, language, and preferences

## 🎨 Design Details

### Theme Colors (WhatsApp-Style Dark)
- **Background**: `#111b21`
- **Surface**: `#1f2c34`
- **Chat BG**: `#0b141a`
- **Accent**: `#00a884` (WhatsApp green)
- **Text Primary**: `#e9edef`
- **Text Secondary**: `#8696a0`

### Phone Frame
- **Device**: iPhone 375x812px (standard modern iPhone)
- **Border Radius**: 40px with notch
- **Box Shadow**: Professional depth effect

### Key Features
✅ Fully responsive HTML/CSS
✅ No external frameworks required
✅ Dark theme matches Flutter app exactly
✅ Authentic iPhone phone frame
✅ Interactive hover effects
✅ Message animations
✅ Status progress bars
✅ Form interactions

## 📂 File Structure

```
app-preview/
├── index.html           # Main preview page with grid of all screens
├── login.html           # Login screen
├── chat-list.html       # Chat list
├── chat-detail.html     # Chat messages
├── contacts.html        # Contact picker
├── profile.html         # User profile
├── settings.html        # Settings
├── status-list.html     # Status list
├── status-viewer.html   # Full-screen status viewer
└── README.md            # This file
```

## 🚀 How to Use

### View in Browser
Simply open `index.html` in any modern web browser. The index page contains links to all 8 screen mockups organized by section.

### Hosting
To host these mockups:
```bash
# Using Python 3
python -m http.server 8000

# Using Node.js
npx http-server

# Using PHP
php -S localhost:8000
```

Then navigate to `http://localhost:8000/app-preview/` or `http://localhost:8000/app-preview/index.html`

## 🛠 Technical Details

### Built With
- Pure HTML5
- CSS3 (Flexbox, Grid, Animations)
- No JavaScript frameworks (vanilla JS for interactive elements)
- Responsive design

### CSS Features Used
- CSS Grid & Flexbox layouts
- CSS Animations (progress bars, fade-ins, shimmer effects)
- CSS Gradients (matching app theme)
- Media queries for responsiveness
- Box shadows and transforms
- Pseudo-elements for decorative effects

### Browser Compatibility
- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+

## 🎯 Mockup Accuracy

Each mockup is created directly from the Flutter source code:
- ✅ Exact color values from `AppColors.dart`
- ✅ Precise layout from Flutter widgets
- ✅ Message flow and interactions
- ✅ Navigation structure
- ✅ Bottom navigation tabs
- ✅ Input fields and buttons
- ✅ Status indicators and badges

## 📸 Screen Details

### Login Screen
- Email and password input fields
- Show/hide password toggle
- "Forgot password?" link (opens wa.resayil.io/recover)
- "Register" link (opens wa.resayil.io/register)
- Loading state for submit button
- Error message display

### Chat List
- Search bar with keyboard input
- Filter chips (All, Unread, Groups)
- 5 sample chat items with avatars
- Unread indicators
- Chat preview text (truncated)
- Time stamps
- 5 bottom navigation tabs

### Chat Detail
- Contact info header with status
- Message list with timestamps
- Incoming and outgoing message bubbles
- Optimistic UI (sending → sent states)
- Message input bar with emoji and attachment icons
- Send button

### Contacts
- Search functionality
- 8 sample contacts with phone numbers
- Message action button on each contact
- Back button navigation

### Profile
- Large avatar with camera button
- Name, About, Phone, Email fields (editable)
- Security and Business Info sections
- Bottom navigation with active indicator

### Settings
- Profile section at top
- 5 settings options with icons and descriptions
- Logout button at bottom
- App version and footer
- Bottom navigation

### Status List
- "My Status" with add button (+)
- Recent updates section with unviewed indicators
- Viewed section with viewed status
- 6 sample status items
- Time indicators (15 min ago, 2 hours ago, etc.)

### Status Viewer
- Full-screen immersive experience
- Progress bars at top (showing current/completed status)
- Contact header with avatar and timestamp
- Close button
- Navigation areas (left/right to switch status/contact)
- Reaction buttons (❤️, 😂, 😲)
- Reply input field
- Status text/image display

## 🔄 Data Flow

The mockups simulate the app's data flow:
- Authentication → Login screen
- Post-auth → Chat list (main hub)
- Navigation between tabs via bottom nav
- Chat → Chat detail → Back to list
- Status interactions with reactions

## 🎨 Customization

To customize these mockups:

1. **Change Colors**: Edit CSS variables in each screen
2. **Modify Text**: Update the HTML content
3. **Add More Contacts/Chats**: Duplicate `.contact-item` or `.chat-item` divs
4. **Adjust Layout**: Modify CSS Grid/Flexbox properties
5. **Add Images**: Replace emoji placeholders with actual images

## 📝 Notes

- Emoji are used for icons (can be replaced with SVG or image assets)
- No backend data persistence (mockups only)
- Animations are CSS-based (lightweight)
- Phone frame styling is consistent across all screens
- Status bar and notch are decorative (non-functional)

## 🔗 Related Files

- Flutter App: `~/resayil_app/`
- App Colors: `lib/core/config/theme/app_colors.dart`
- Screen Files: `lib/features/*/screens/*.dart`
- CLAUDE.md: Project instructions

## 📧 Questions?

For questions or suggestions about these mockups, refer to the main project documentation in the Resayil app repository.

---

**Created**: February 20, 2026
**Version**: 1.0.0
**Status**: Production Ready ✅

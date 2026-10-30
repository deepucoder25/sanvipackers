<?php
// Blog Module - Form View with Compact 3D Glassmorphism UI
?>
    <div class="dash-wrapper blog-module-wrap" ng-init="showData = true">
        <!-- Floating Background 3D Glow Orbs -->
        <div class="glass-orb orb-1"></div>
        <div class="glass-orb orb-2"></div>
        <div class="glass-orb orb-3"></div>

        <!-- Top Compact Glass Header -->
        <div class="glass-panel blog-top-header">
            <div class="header-left">
                <div class="header-tag"><i class="fa fa-newspaper-o"></i> Blog Management</div>
                <h1 class="header-title">Articles & Blog Posts</h1>
                <p class="header-subtitle">Publish news, write articles, and optimize content for search engines.</p>
            </div>
            <div class="header-actions">
                <button type="button" class="btn-3d-secondary" ng-click="showData=!showData">
                    <i class="fa" ng-class="showData ? 'fa-eye-slash' : 'fa-list-ul'"></i>
                    <span>{{showData ? 'Hide Records' : 'Show Records (' + (datadb.length || 0) + ')'}}</span>
                </button>
                <button type="button" class="btn-3d-primary" ng-click="filter_new()">
                    <i class="fa fa-plus-circle"></i>
                    <span>New Article</span>
                </button>
            </div>
        </div>

        <!-- Main Grid Layout -->
        <div class="blog-grid-layout" ng-class="{'records-hidden': !showData}">

            <!-- Left Column: Unified 3D Glass Form (No Stepper Tabs) -->
            <div class="glass-panel blog-form-panel">
                <div class="panel-header">
                    <div class="panel-header-title">
                        <span class="header-dot"></span>
                        <span ng-if="!x.b_id">Compose New Article</span>
                        <span ng-if="x.b_id">Edit Article #{{x.b_id}}</span>
                    </div>
                    <div class="panel-header-badge" ng-if="x.b_id">Editing Mode</div>
                </div>

                <form class="blog-3d-form" name="form1" id="form1" method="post" action="" autocomplete="off"
                    enctype="multipart/form-data">
                    <input name="b_id" ng-model="x.b_id" type="hidden">

                    <!-- Section: Basic Essentials -->
                    <div class="form-section">
                        <div class="section-title-wrap">
                            <span class="section-icon"><i class="fa fa-pencil"></i></span>
                            <span class="section-heading">Article Essentials</span>
                        </div>

                        <!-- Title -->
                        <div class="field-group">
                            <label class="field-label">
                                <span>Post Title</span>
                                <span class="req-star">*</span>
                            </label>
                            <div class="input-3d-box">
                                <i class="fa fa-heading input-icon"></i>
                                <input type="text" name="title" class="input-3d-control" ng-model="x.title"
                                    placeholder="e.g. 10 Essential Packing Tips for Safe Relocation" required
                                    ng-keyup="slugify()">
                            </div>
                        </div>

                        <!-- Slug (URL) -->
                        <div class="field-group">
                            <label class="field-label">
                                <span>Permanent URL Slug</span>
                                <span class="field-hint">(Auto-generated)</span>
                            </label>
                            <div class="input-3d-box slug-box">
                                <span class="slug-prefix">/blog/</span>
                                <input type="text" name="slug" class="input-3d-control slug-control" ng-model="x.slug"
                                    placeholder="10-essential-packing-tips">
                            </div>
                        </div>

                        <!-- Row: Author & Read Time -->
                        <div class="form-row-2">
                            <div class="field-group">
                                <label class="field-label">
                                    <span>Author Name</span>
                                </label>
                                <div class="input-3d-box">
                                    <i class="fa fa-user input-icon"></i>
                                    <input type="text" name="author" class="input-3d-control" ng-model="x.author"
                                        placeholder="Admin / Team">
                                </div>
                            </div>

                            <div class="field-group">
                                <label class="field-label">
                                    <span>Reading Time</span>
                                    <span class="req-star">*</span>
                                </label>
                                <div class="input-3d-box">
                                    <i class="fa fa-clock-o input-icon"></i>
                                    <input type="text" name="time" class="input-3d-control" ng-model="x.time"
                                        placeholder="e.g. 5 min read" required>
                                </div>
                            </div>
                        </div>

                        <!-- Row: Publish Date & Tags -->
                        <div class="form-row-2">
                            <div class="field-group">
                                <label class="field-label">
                                    <span>Publish Date</span>
                                    <span class="req-star">*</span>
                                </label>
                                <div class="input-3d-box">
                                    <i class="fa fa-calendar input-icon"></i>
                                    <input type="text" name="date" id="DOB1" class="input-3d-control" ng-model="x.date"
                                        placeholder="e.g. Oct 28, 2026" required>
                                </div>
                            </div>

                            <div class="field-group">
                                <label class="field-label">
                                    <span>Keywords / Tags</span>
                                </label>
                                <div class="input-3d-box">
                                    <i class="fa fa-tags input-icon"></i>
                                    <input type="text" name="tags" class="input-3d-control" ng-model="x.tags"
                                        placeholder="relocation, packing">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section: Media & Cover Image -->
                    <div class="form-section">
                        <div class="section-title-wrap">
                            <span class="section-icon"><i class="fa fa-picture-o"></i></span>
                            <span class="section-heading">Feature Cover Image</span>
                        </div>

                        <div class="media-upload-area">
                            <div class="upload-drop-zone" onclick="document.getElementById('imageFile').click()">
                                <div class="drop-icon-3d">
                                    <i class="fa fa-cloud-upload"></i>
                                </div>
                                <div class="drop-text-content">
                                    <span class="drop-title">Select Cover Image</span>
                                    <span class="drop-subtitle">Recommended: JPG, PNG, WEBP (Max 5MB)</span>
                                </div>
                                <input type="file" name="image" id="imageFile" class="file-hidden-input"
                                    style="display: none !important; opacity: 0 !important; position: absolute !important; pointer-events: none !important; width: 0 !important; height: 0 !important;"
                                    onchange="previewSelectedImage(this)">
                                <input type="hidden" name="old_image" ng-model="x.image">
                            </div>

                            <!-- Live Preview Card -->
                            <div class="current-image-preview" ng-show="x.image" id="imagePreviewWrapper">
                                <div class="preview-img-box">
                                    <img ng-src="<?= base_url("assets/uploads/blog/thumb") ?>/{{x.image}}"
                                        id="previewImgEl" class="preview-thumb-img" alt="Cover Preview">
                                </div>
                                <div class="preview-info">
                                    <span class="preview-badge"><i class="fa fa-check-circle"></i> Active</span>
                                    <span class="preview-name">{{x.image}}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section: Article Content -->
                    <div class="form-section">
                        <div class="section-title-wrap">
                            <span class="section-icon"><i class="fa fa-file-text-o"></i></span>
                            <span class="section-heading">Article Content</span>
                            <span class="req-star">*</span>
                        </div>

                        <div class="summernote-3d-frame">
                            <summernote config="options" ng-model="x.description"></summernote>
                            <textarea name="description" id="hiddenDescTextarea" ng-model="x.description"
                                style="display: none;"></textarea>
                        </div>
                    </div>

                    <!-- Section: SEO Settings (Collapsible) -->
                    <div class="form-section seo-collapsible-section">
                        <div class="section-title-wrap toggle-seo-trigger" ng-click="showSeo=!showSeo">
                            <div class="title-left">
                                <span class="section-icon"><i class="fa fa-search"></i></span>
                                <span class="section-heading">Search Engine Optimization (SEO)</span>
                            </div>
                            <span class="seo-toggle-badge">
                                <i class="fa" ng-class="showSeo ? 'fa-chevron-up' : 'fa-chevron-down'"></i>
                                {{showSeo ? 'Collapse' : 'Expand'}}
                            </span>
                        </div>

                        <div class="seo-content-collapsible" ng-show="showSeo">
                            <div class="field-group">
                                <label class="field-label">
                                    <span>Meta Title</span>
                                    <span class="field-hint">(Max 60 chars)</span>
                                </label>
                                <div class="input-3d-box">
                                    <i class="fa fa-globe input-icon"></i>
                                    <input type="text" name="meta_title" class="input-3d-control"
                                        ng-model="x.meta_title" placeholder="SEO Title for Google search">
                                </div>
                            </div>

                            <div class="field-group" style="margin-bottom: 0;">
                                <label class="field-label">
                                    <span>Meta Description</span>
                                    <span class="field-hint">(Max 160 chars)</span>
                                </label>
                                <div class="textarea-3d-box">
                                    <textarea name="meta_desc" class="input-3d-control textarea-control" rows="2"
                                        ng-model="x.meta_desc" placeholder="Brief summary of the article"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Action Buttons -->
                    <div class="form-action-bar">
                        <div class="action-buttons-left">
                            <button type="button" id="submitbtn" class="btn-3d-primary btn-save-action"
                                ng-click="save_data(x)">
                                <i class="fa fa-check-circle"></i>
                                <span>{{x.b_id ? 'Update Article' : 'Publish Article'}}</span>
                            </button>

                            <button type="button" class="btn-3d-secondary" ng-click="filter_new()">
                                <i class="fa fa-refresh"></i>
                                <span>Clear</span>
                            </button>
                        </div>

                        <div id="webprogress" class="webprogress-spinner" style="display: none;">
                            <i class="fa fa-circle-o-notch fa-spin"></i>
                            <span>Saving...</span>
                        </div>
                    </div>

                </form>
            </div>

            <!-- Right Column: Records Table Panel -->
            <div class="glass-panel blog-records-panel" ng-show="showData">
                <?php include 'data.php'; ?>
            </div>

        </div>
    </div>

    <!-- Compact 3D Glassmorphism Styles -->
    <style>
        /* ====================================================================
   COMPACT 3D GLASSMORPHISM (TIGHT PADDING, SMALL SIZE & HIGH MOBILITY)
   ==================================================================== */

        .blog-module-wrap {
            position: relative;
            padding: 4px 6px 14px 6px;
            font-family: 'Outfit', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            color: #1e293b;
            overflow: hidden;
        }

        /* Floating 3D Glowing Glass Orbs */
        .glass-orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(80px);
            pointer-events: none;
            z-index: 0;
            opacity: 0.45;
        }

        .orb-1 {
            width: 380px;
            height: 380px;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.22) 0%, rgba(168, 85, 247, 0.14) 60%, transparent 80%);
            top: 5%;
            right: 8%;
        }

        .orb-2 {
            width: 320px;
            height: 320px;
            background: radial-gradient(circle, rgba(56, 189, 248, 0.24) 0%, rgba(59, 130, 246, 0.12) 60%, transparent 80%);
            bottom: 8%;
            left: 15%;
        }

        .orb-3 {
            width: 220px;
            height: 220px;
            background: radial-gradient(circle, rgba(236, 72, 153, 0.15) 0%, transparent 75%);
            top: 40%;
            right: 35%;
        }

        /* Glass Panels */
        .glass-panel {
            background: rgba(255, 255, 255, 0.84);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.95);
            border-radius: 14px;
            box-shadow:
                0 6px 20px -4px rgba(15, 35, 75, 0.04),
                0 1px 4px -1px rgba(15, 35, 75, 0.02),
                inset 0 1px 0 rgba(255, 255, 255, 0.95);
            position: relative;
            z-index: 1;
        }

        /* Top Header */
        .blog-top-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px 14px;
            margin-bottom: 8px;
            gap: 10px;
        }

        .header-tag {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            font-size: 9.5px;
            font-weight: 800;
            letter-spacing: 0.4px;
            text-transform: uppercase;
            color: #4338ca;
            background: rgba(99, 102, 241, 0.1);
            padding: 2px 7px;
            border-radius: 12px;
            margin-bottom: 2px;
        }

        .header-title {
            margin: 0 0 1px 0;
            font-size: 15px;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: -0.3px;
        }

        .header-subtitle {
            margin: 0;
            font-size: 10.5px;
            color: #64748b;
            font-weight: 500;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 6px;
            flex-shrink: 0;
        }

        /* 3D Action Buttons */
        .btn-3d-primary {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            color: #ffffff !important;
            border: none;
            border-radius: 8px;
            padding: 6px 12px;
            font-size: 11.5px;
            font-weight: 700;
            letter-spacing: 0.1px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
            box-shadow:
                0 4px 10px -2px rgba(37, 99, 235, 0.35),
                0 1px 3px rgba(37, 99, 235, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
            text-decoration: none;
        }

        .btn-3d-primary:hover {
            transform: translateY(-1px);
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            box-shadow:
                0 6px 14px -2px rgba(37, 99, 235, 0.42),
                inset 0 1px 0 rgba(255, 255, 255, 0.4);
        }

        .btn-3d-secondary {
            background: rgba(255, 255, 255, 0.92);
            color: #334155 !important;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            padding: 5px 11px;
            font-size: 11.5px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
            box-shadow:
                0 2px 4px rgba(15, 23, 42, 0.03),
                inset 0 1px 0 #ffffff;
            transition: all 0.18s ease;
            text-decoration: none;
        }

        .btn-3d-secondary:hover {
            background: #ffffff;
            color: #0f172a !important;
            border-color: #94a3b8;
            transform: translateY(-1px);
            box-shadow: 0 4px 10px rgba(15, 23, 42, 0.06);
        }

        /* Grid Layout (Form & Records) */
        .blog-grid-layout {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 8px;
            align-items: start;
            position: relative;
            z-index: 1;
        }

        .blog-grid-layout.records-hidden {
            grid-template-columns: 1fr;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Form Panel */
        .blog-form-panel {
            padding: 10px 14px;
        }

        .panel-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 6px;
            margin-bottom: 8px;
            border-bottom: 1.5px solid rgba(226, 232, 240, 0.7);
        }

        .panel-header-title {
            font-size: 13px;
            font-weight: 800;
            color: #0f172a;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .header-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #3b82f6;
            display: inline-block;
            box-shadow: 0 0 6px rgba(59, 130, 246, 0.6);
        }

        .panel-header-badge {
            font-size: 9.5px;
            font-weight: 700;
            color: #2563eb;
            background: rgba(59, 130, 246, 0.12);
            padding: 2px 8px;
            border-radius: 12px;
        }

        /* Form Sections */
        .form-section {
            margin-bottom: 8px;
        }

        .section-title-wrap {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 6px;
        }

        .section-icon {
            width: 19px;
            height: 19px;
            border-radius: 5px;
            background: linear-gradient(135deg, #3b82f6, #6366f1);
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 9px;
            box-shadow: 0 2px 5px rgba(59, 130, 246, 0.25);
        }

        .section-heading {
            font-size: 11px;
            font-weight: 800;
            color: #1e293b;
            letter-spacing: 0.2px;
            text-transform: uppercase;
        }

        /* 3D Input Boxes */
        .field-group {
            margin-bottom: 6px;
        }

        .field-label {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 10.5px;
            font-weight: 700;
            color: #334155;
            margin-bottom: 2px;
        }

        .req-star {
            color: #ef4444;
            font-weight: 800;
        }

        .field-hint {
            font-size: 9.5px;
            font-weight: 500;
            color: #94a3b8;
        }

        .form-row-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6px;
        }

        .input-3d-box {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 9px;
            color: #94a3b8;
            font-size: 11px;
            pointer-events: none;
            transition: color 0.2s ease;
            z-index: 2;
        }

        /* Core 3D Input Style */
        .input-3d-control {
            width: 100%;
            background: #ffffff;
            border: 1.5px solid #cbd5e1;
            border-radius: 8px;
            padding: 6px 10px 6px 27px;
            font-size: 11.5px;
            font-weight: 600;
            color: #0f172a;
            outline: none;
            box-shadow:
                inset 0 1.5px 3px rgba(15, 23, 42, 0.04),
                0 1px 0 rgba(255, 255, 255, 0.9);
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .input-3d-control:focus {
            border-color: #3b82f6;
            background: #ffffff;
            box-shadow:
                inset 0 1.5px 3px rgba(59, 130, 246, 0.05),
                0 0 0 2.5px rgba(59, 130, 246, 0.16);
            transform: translateY(-1px);
        }

        .input-3d-box:focus-within .input-icon {
            color: #3b82f6;
        }

        /* Slug Input With Prefix */
        .slug-box {
            border-radius: 8px;
            overflow: hidden;
        }

        .slug-prefix {
            background: #f1f5f9;
            border: 1.5px solid #cbd5e1;
            border-right: none;
            border-radius: 8px 0 0 8px;
            padding: 6px 8px;
            font-size: 10.5px;
            font-weight: 700;
            color: #64748b;
            box-shadow: inset 0 1.5px 3px rgba(15, 23, 42, 0.03);
        }

        .slug-control {
            border-radius: 0 8px 8px 0 !important;
            padding-left: 8px !important;
        }

        /* 3D Image Upload Drop Area */
        .media-upload-area {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .upload-drop-zone {
            flex: 1;
            background: #ffffff;
            border: 1.5px dashed #cbd5e1;
            border-radius: 9px;
            padding: 8px 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            box-shadow:
                inset 0 1.5px 3px rgba(15, 23, 42, 0.02),
                0 1px 0 #fff;
            transition: all 0.2s ease;
        }

        .upload-drop-zone:hover {
            border-color: #3b82f6;
            background: rgba(59, 130, 246, 0.02);
            transform: translateY(-1px);
        }

        .drop-icon-3d {
            width: 30px;
            height: 30px;
            border-radius: 7px;
            background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%);
            color: #4338ca;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            box-shadow: 0 2px 6px rgba(67, 56, 202, 0.12);
            flex-shrink: 0;
        }

        .drop-title {
            display: block;
            font-size: 11px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 1px;
        }

        .drop-subtitle {
            display: block;
            font-size: 9px;
            font-weight: 500;
            color: #94a3b8;
        }

        .file-hidden-input {
            display: none;
        }

        /* Live Preview Box */
        .current-image-preview {
            display: flex;
            align-items: center;
            gap: 6px;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 3px 6px;
            box-shadow: 0 2px 6px rgba(15, 23, 42, 0.04);
        }

        .preview-thumb-img {
            width: 32px;
            height: 32px;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #e2e8f0;
        }

        .preview-badge {
            display: block;
            font-size: 9px;
            font-weight: 700;
            color: #059669;
        }

        .preview-name {
            display: block;
            font-size: 9.5px;
            font-weight: 600;
            color: #64748b;
            max-width: 80px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        /* Summernote 3D Container */
        .summernote-3d-frame {
            border: 1.5px solid #cbd5e1;
            border-radius: 9px;
            overflow: hidden;
            background: #ffffff;
            box-shadow:
                inset 0 1.5px 3px rgba(15, 23, 42, 0.03),
                0 1px 0 #fff;
            transition: all 0.2s ease;
        }

        .summernote-3d-frame:focus-within {
            border-color: #3b82f6;
            box-shadow:
                inset 0 1.5px 3px rgba(59, 130, 246, 0.05),
                0 0 0 2.5px rgba(59, 130, 246, 0.15);
        }

        .summernote-3d-frame .note-editor.note-frame {
            border: none !important;
            margin-bottom: 0 !important;
        }

        .summernote-3d-frame .note-toolbar {
            background: #f8fafc !important;
            border-bottom: 1px solid #e2e8f0 !important;
            padding: 3px 6px !important;
        }

        .summernote-3d-frame .note-editable {
            min-height: 100px;
            font-size: 12.5px;
            color: #1e293b;
            padding: 8px 10px;
            line-height: 1.5;
        }

        /* SEO Collapsible Section */
        .seo-collapsible-section {
            background: rgba(248, 250, 252, 0.85);
            border: 1px solid #e2e8f0;
            border-radius: 9px;
            padding: 6px 10px;
            box-shadow: inset 0 1px 0 #fff;
        }

        .toggle-seo-trigger {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 0;
            cursor: pointer;
            user-select: none;
        }

        .title-left {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .seo-toggle-badge {
            font-size: 9.5px;
            font-weight: 700;
            color: #4338ca;
            background: rgba(99, 102, 241, 0.12);
            padding: 2px 7px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .seo-content-collapsible {
            margin-top: 8px;
            padding-top: 8px;
            border-top: 1px dashed #cbd5e1;
        }

        .textarea-control {
            padding-left: 10px !important;
            resize: vertical;
            min-height: 50px;
            font-family: inherit;
        }

        /* Action Bar */
        .form-action-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
            margin-top: 10px;
            padding-top: 8px;
            border-top: 1.5px solid rgba(226, 232, 240, 0.8);
        }

        .action-buttons-left {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .btn-save-action {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
            box-shadow:
                0 4px 10px -2px rgba(16, 185, 129, 0.35),
                inset 0 1px 0 rgba(255, 255, 255, 0.3) !important;
        }

        .btn-save-action:hover {
            background: linear-gradient(135deg, #059669 0%, #047857 100%) !important;
            box-shadow:
                0 6px 14px -2px rgba(16, 185, 129, 0.45),
                inset 0 1px 0 rgba(255, 255, 255, 0.4) !important;
        }

        .webprogress-spinner {
            font-size: 11px;
            font-weight: 700;
            color: #059669;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        /* ====================================================================
   MOBILE RESPONSIVENESS (PERFECT FIT - NO HORIZONTAL OVERFLOW)
   ==================================================================== */
        @media (max-width: 991px) {

            .blog-module-wrap {
                padding: 4px 2px 20px 2px !important;
                width: 100% !important;
                max-width: 100vw !important;
                overflow-x: hidden !important;
                box-sizing: border-box !important;
            }

            .blog-top-header {
                flex-direction: column !important;
                align-items: stretch !important;
                padding: 8px 10px !important;
                width: 100% !important;
                box-sizing: border-box !important;
                gap: 6px !important;
            }

            .header-actions {
                width: 100% !important;
                display: flex !important;
                gap: 6px !important;
                margin-top: 4px !important;
            }

            .header-actions button {
                flex: 1 1 auto !important;
                justify-content: center !important;
                font-size: 11px !important;
                padding: 6px 8px !important;
            }


            .blog-grid-layout {
                display: flex !important;
                flex-direction: column !important;
                width: 100% !important;
                max-width: 100% !important;
                gap: 8px !important;
                box-sizing: border-box !important;
            }

            .blog-form-panel,
            .blog-records-panel {
                width: 100% !important;
                max-width: 100% !important;
                padding: 10px 8px !important;
                box-sizing: border-box !important;
                overflow-x: hidden !important;
            }

            .form-row-2 {
                display: flex !important;
                flex-direction: column !important;
                gap: 6px !important;
                width: 100% !important;
            }

            .field-group {
                width: 100% !important;
                max-width: 100% !important;
                box-sizing: border-box !important;
            }

            .input-3d-box {
                width: 100% !important;
                box-sizing: border-box !important;
            }

            .input-3d-control {
                width: 100% !important;
                box-sizing: border-box !important;
                font-size: 13px !important;
            }

            .slug-box {
                width: 100% !important;
                display: flex !important;
                box-sizing: border-box !important;
            }

            .slug-prefix {
                font-size: 10px !important;
                padding: 6px 6px !important;
                flex-shrink: 0 !important;
            }

            .slug-control {
                flex: 1 !important;
                min-width: 0 !important;
                width: 100% !important;
            }

            .media-upload-area {
                flex-direction: column !important;
                align-items: stretch !important;
                width: 100% !important;
            }


            .upload-drop-zone {
                width: 100% !important;
                box-sizing: border-box !important;
            }

            .summernote-3d-frame {
                width: 100% !important;
                max-width: 100% !important;
                box-sizing: border-box !important;
                overflow: hidden !important;
            }

            .summernote-3d-frame .note-toolbar {
                display: flex !important;
                flex-wrap: wrap !important;
                gap: 2px !important;
                padding: 4px !important;
                max-width: 100% !important;
                box-sizing: border-box !important;
            }

            .summernote-3d-frame .note-toolbar .btn-group {
                display: inline-flex !important;
                flex-wrap: wrap !important;
                margin: 1px !important;
            }

            .summernote-3d-frame .note-toolbar .btn {
                padding: 4px 6px !important;
                font-size: 11px !important;
            }

            .summernote-3d-frame .note-editable {
                width: 100% !important;
                box-sizing: border-box !important;
                min-height: 90px !important;
                font-size: 13px !important;
            }

            .form-action-bar {
                flex-direction: column !important;
                align-items: stretch !important;
                width: 100% !important;
                gap: 6px !important;
                box-sizing: border-box !important;
            }

            .action-buttons-left {
                width: 100% !important;
                display: flex !important;
                flex-direction: column !important;
                gap: 6px !important;
            }

            .action-buttons-left button {
                width: 100% !important;
                display: flex !important;
                justify-content: center !important;
                padding: 9px 12px !important;
                font-size: 12.5px !important;
            }
        }
    </style>

    <!-- Live Image Preview Script -->
    <script>
        function previewSelectedImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var previewWrap = document.getElementById('imagePreviewWrapper');
                    var previewImg = document.getElementById('previewImgEl');
                    if (previewImg) {
                        previewImg.src = e.target.result;
                    }
                    if (previewWrap) {
                        previewWrap.style.display = 'flex';
                    }
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>